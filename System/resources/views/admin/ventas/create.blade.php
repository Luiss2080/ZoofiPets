<x-admin>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-[calc(100vh-140px)]">
        <!-- Panel Izquierdo: Selección de Productos -->
        <div class="lg:col-span-2 bg-gray-800/50 rounded-xl border border-gray-700 flex flex-col overflow-hidden">
            <div class="p-4 border-b border-gray-700 flex justify-between items-center bg-gray-900/50">
                <h2 class="text-xl font-bold text-white">Catálogo de Productos</h2>
                <input type="text" id="search-product" placeholder="Buscar por nombre o código..." 
                    class="bg-gray-800 border border-gray-600 rounded-lg px-4 py-2 text-sm text-white w-64 focus:border-neon-blue outline-none">
            </div>
            
            <div class="p-4 overflow-y-auto flex-1 custom-scrollbar">
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4" id="products-grid">
                    @foreach($productos as $producto)
                        <div class="product-card bg-gray-800 border border-gray-700 rounded-lg p-3 hover:border-neon-blue cursor-pointer transition group"
                             onclick="addToCart({{ $producto->id }}, '{{ $producto->nombre }}', {{ $producto->precio_venta }}, {{ $producto->stock_actual }})">
                            <div class="h-24 bg-gray-700/50 rounded-md mb-2 flex items-center justify-center text-3xl">
                                📦
                            </div>
                            <h3 class="font-bold text-white text-sm truncate" title="{{ $producto->nombre }}">{{ $producto->nombre }}</h3>
                            <p class="text-xs text-gray-400 mb-1">Stock: {{ $producto->stock_actual }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-neon-green font-bold">${{ number_format($producto->precio_venta, 2) }}</span>
                                <button class="w-6 h-6 bg-neon-blue rounded-full text-black flex items-center justify-center opacity-0 group-hover:opacity-100 transition">+</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Panel Derecho: Carrito y Checkout -->
        <div class="bg-gray-800/50 rounded-xl border border-gray-700 flex flex-col h-full">
            <div class="p-4 border-b border-gray-700 bg-gray-900/50">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-white">Venta Actual</h2>
                    <span class="text-xs bg-neon-blue/20 text-neon-blue px-2 py-1 rounded">POS System</span>
                </div>
                
                <!-- Selector de Cliente -->
                <select id="cliente-select" class="w-full bg-gray-900 border border-gray-600 rounded-lg p-2 text-sm text-white mb-2">
                    <option value="">Cliente Casual (General)</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                    @endforeach
                </select>
                
                 <!-- Selector de Empleado (Temporalmente estatico o del usuario logueado en backend) -->
                 <!-- En implementacion real, esto se toma Auth::user()->empleado_id -->
                 <input type="hidden" id="empleado-id" value="1"> <!-- ID Hardcoded por ahora para demo -->
            </div>

            <!-- Lista de Items -->
            <div class="flex-1 overflow-y-auto p-4 custom-scrollbar space-y-2" id="cart-items">
                <!-- Se llena con JS -->
                <p class="text-center text-gray-500 mt-10 italic" id="empty-cart-msg">El carrito está vacío</p>
            </div>

            <!-- Totales y Botón -->
            <div class="p-4 bg-gray-900 border-t border-gray-700">
                <div class="flex justify-between text-gray-400 text-sm mb-1">
                    <span>Subtotal</span>
                    <span id="subtotal-display">$0.00</span>
                </div>
                <div class="flex justify-between text-gray-400 text-sm mb-2">
                    <span>Impuesto (16%)</span>
                    <span id="tax-display">$0.00</span>
                </div>
                <div class="flex justify-between text-white font-bold text-xl mb-4">
                    <span>Total</span>
                    <span class="text-neon-green" id="total-display">$0.00</span>
                </div>

                <div class="grid grid-cols-2 gap-2 mb-4">
                    <button onclick="setPayment('Efectivo')" class="pay-method p-2 rounded border border-gray-600 text-gray-300 hover:bg-gray-700 text-sm active-method ring-1 ring-neon-blue bg-gray-700">💵 Efectivo</button>
                    <button onclick="setPayment('Tarjeta')" class="pay-method p-2 rounded border border-gray-600 text-gray-300 hover:bg-gray-700 text-sm">💳 Tarjeta</button>
                </div>

                <button onclick="processSale()" id="checkout-btn" disabled
                    class="w-full py-3 bg-neon-green text-black font-bold rounded-lg shadow-[0_0_15px_#00ff00] hover:bg-neon-green/80 transition disabled:opacity-50 disabled:shadow-none">
                    Cobrar Venta
                </button>
            </div>
        </div>
    </div>

    <!-- Script POS -->
    <script>
        let cart = [];
        let currentPaymentMethod = 'Efectivo';

        function addToCart(id, name, price, maxStock) {
            const existing = cart.find(item => item.id === id);
            
            if (existing) {
                if (existing.cantidad >= maxStock) {
                    alert('Stock máximo alcanzado para este producto');
                    return;
                }
                existing.cantidad++;
            } else {
                cart.push({ id, name, price, cantidad: 1, maxStock });
            }
            renderCart();
        }

        function removeFromCart(id) {
            cart = cart.filter(item => item.id !== id);
            renderCart();
        }

        function updateQuantity(id, delta) {
            const item = cart.find(item => item.id === id);
            if (item) {
                const newQty = item.cantidad + delta;
                if (newQty > 0 && newQty <= item.maxStock) {
                    item.cantidad = newQty;
                } else if (newQty > item.maxStock) {
                     alert('No hay suficiente stock');
                }
                renderCart();
            }
        }

        function renderCart() {
            const container = document.getElementById('cart-items');
            const emptyMsg = document.getElementById('empty-cart-msg');
            const checkoutBtn = document.getElementById('checkout-btn');

            container.innerHTML = '';
            
            if (cart.length === 0) {
                emptyMsg.style.display = 'block';
                checkoutBtn.disabled = true;
                updateTotals(0);
                return;
            }

            emptyMsg.style.display = 'none';
            checkoutBtn.disabled = false;

            let subtotal = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.cantidad;
                subtotal += itemTotal;

                container.innerHTML += `
                    <div class="flex justify-between items-center bg-gray-700/50 p-2 rounded border border-gray-600">
                        <div class="flex-1 min-w-0 mr-2">
                            <h4 class="text-white text-sm font-medium truncate">${item.name}</h4>
                            <p class="text-xs text-neon-blue">$${item.price.toFixed(2)} x ${item.cantidad}</p>
                        </div>
                        <div class="flex items-center gap-2">
                             <button onclick="updateQuantity(${item.id}, -1)" class="w-6 h-6 bg-gray-600 text-white rounded hover:bg-gray-500">-</button>
                             <span class="text-white text-sm font-bold w-4 text-center">${item.cantidad}</span>
                             <button onclick="updateQuantity(${item.id}, 1)" class="w-6 h-6 bg-gray-600 text-white rounded hover:bg-gray-500">+</button>
                             <button onclick="removeFromCart(${item.id})" class="text-red-400 hover:text-red-300 ml-1">✕</button>
                        </div>
                    </div>
                `;
            });

            updateTotals(subtotal);
        }

        function updateTotals(subtotal) {
            const tax = subtotal * 0.16;
            const total = subtotal + tax;

            document.getElementById('subtotal-display').innerText = `$${subtotal.toFixed(2)}`;
            document.getElementById('tax-display').innerText = `$${tax.toFixed(2)}`;
            document.getElementById('total-display').innerText = `$${total.toFixed(2)}`;
        }

        function setPayment(method) {
            currentPaymentMethod = method;
            document.querySelectorAll('.pay-method').forEach(btn => {
                btn.classList.remove('active-method', 'ring-1', 'ring-neon-blue', 'bg-gray-700');
            });
            event.target.classList.add('active-method', 'ring-1', 'ring-neon-blue', 'bg-gray-700');
        }

        function processSale() {
            const clienteId = document.getElementById('cliente-select').value;
            const empleadoId = document.getElementById('empleado-id').value; // Hardcoded for now

            if (cart.length === 0) return;

            const btn = document.getElementById('checkout-btn');
            btn.innerHTML = 'Procesando...';
            btn.disabled = true;

            fetch('{{ route("admin.ventas.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    cliente_id: clienteId || null,
                    empleado_id: empleadoId,
                    productos: cart,
                    metodo_pago: currentPaymentMethod
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Venta realizada con éxito!');
                    cart = [];
                    renderCart();
                    // Opcional: Redirigir a recibo
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error de conexión');
            })
            .finally(() => {
                btn.innerHTML = 'Cobrar Venta';
                btn.disabled = false;
            });
        }
        
        // Buscador simple
        document.getElementById('search-product').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase();
            document.querySelectorAll('.product-card').forEach(card => {
                const name = card.querySelector('h3').title.toLowerCase();
                if (name.includes(term)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</x-admin>
