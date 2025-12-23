@extends('layouts.admin')

@section('title', 'Nuevo Docente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/docentes/create.css') }}">
@endsection

@section('content')
<div class="create-container">
    <!-- Header -->
    <div class="panel-header">
<x-admin>
    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/admin/clientes/create.css') }}">
    @endsection

    <div class="create-container">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="title-content">
                    <h2>Registrar Nuevo Cliente</h2>
                    <span class="subtitle">Ingrese los datos para dar de alta un nuevo cliente</span>
                </div>
            </div>
            <a href="{{ route('recepcionista.clientes.index') }}" class="btn-secondary-action">
                <i class="fas fa-arrow-left"></i> Volver a la lista
            </a>
        </div>

        <div class="form-content">
            <!-- Left Info Panel -->
            <div class="left-column">
                <div class="form-card profile-card">
                    <div class="card-header">
                        <h3><i class="fas fa-user-circle"></i></h3>
                        <p>Nuevo Perfil</p>
                    </div>
                    <div class="profile-upload-section">
                        <div class="avatar-preview">
                            <div class="avatar-placeholder">
                                <i class="fas fa-camera"></i>
                            <div class="help-text">
                                <h4>Documentación</h4>
                                <p>Tenga a mano los títulos escaneados.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
                        </div>
                        <div class="help-card-item">
                            <div class="help-icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="help-text">
                                <h4>Soporte</h4>
                                <p>¿Dudas? Contacte al dpto. técnico.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
                        </div>
                        <div class="help-card-item">
                            <div class="help-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="help-text">
                                <h4>Evaluación</h4>
                                <p>Revise el sistema de calificación.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
                        </div>
                        <div class="help-card-item">
                            <div class="help-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="help-text">
                                <h4>Recursos</h4>
                                <p>Acceda a materiales y guías.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form Sections -->
            <div class="right-column">
                
                <!-- Card 1: Personal Data -->
                <div class="form-card">
                    <div class="card-header">
                        <h3>
                            <i class="fas fa-user"></i>
                            Datos Personales
                        </h3>
                        <p>Información básica del docente</p>
                    </div>

                    <div class="form-grid">
                        <div class="form-group span-2">
                            <label for="nombre">Nombre Completo <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Ej: Juan" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="apellido">Apellidos <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="apellido" name="apellido" class="form-input" placeholder="Ej: Pérez García" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="ci">Documento de Identidad (CI) <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-id-card"></i>
                                <input type="text" id="ci" name="ci" class="form-input" placeholder="Ej: 1234567" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <div class="input-wrapper">
                                <i class="fas fa-calendar-alt"></i>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-input">
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="genero">Género</label>
                            <div class="input-wrapper">
                                <i class="fas fa-venus-mars"></i>
                                <select id="genero" name="genero" class="form-select">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="O">Otro</option>
                                </select>
                                <i class="fas fa-chevron-down" style="left: auto; right: 1rem;"></i>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="nacionalidad">Nacionalidad</label>
                            <div class="input-wrapper">
                                <i class="fas fa-globe-americas"></i>
                                <input type="text" id="nacionalidad" name="nacionalidad" class="form-input" placeholder="Ej: Boliviana" value="Boliviana">
                            </div>
                        </div>

                        <div class="form-group span-3">
                            <label for="email">Correo Electrónico <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" class="form-input" placeholder="ejemplo@tech-home.com" required>
                            </div>
                        </div>

                        <div class="form-group span-3">
                            <label for="telefono">Tel./Celular</label>
                            <div class="input-wrapper">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="telefono" name="telefono" class="form-input" placeholder="+591 ...">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="direccion">Dirección Domiciliaria</label>
                            <div class="input-wrapper">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" id="direccion" name="direccion" class="form-input" placeholder="Ej: Av. Principal #123">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Academic & Contract -->
                <div class="form-card">
                    <div class="card-header">
                        <h3>
                            <i class="fas fa-graduation-cap"></i>
                            Datos Académicos y Contrato
                        </h3>
                        <p>Información profesional y laboral</p>
                    </div>

                    <div class="form-grid">
                        <div class="form-group span-2">
                            <label for="codigo_docente">Código</label>
                            <div class="input-wrapper">
                                <i class="fas fa-barcode"></i>
                                <input type="text" id="codigo_docente" name="codigo_docente" class="form-input" placeholder="Automático">
                            </div>
                        </div>

                        <div class="form-group span-4">
                            <label for="especialidad">Especialidad Principal <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-book-reader"></i>
                                <select id="especialidad" name="especialidad" class="form-select" required>
                                    <option value="" disabled selected>Seleccione una opción</option>
                                    <option value="Matemáticas y Física">Matemáticas y Física</option>
                                    <option value="Historia y Literatura">Historia y Literatura</option>
                                    <option value="Química y Biología">Química y Biología</option>
                                    <option value="Física y Matemáticas">Física y Matemáticas</option>
                                    <option value="Literatura e Inglés">Literatura e Inglés</option>
                                    <option value="Informática">Informática</option>
                                    <option value="Robótica">Robótica</option>
                                    <option value="Otra">Otra</option>
                                </select>
                                <i class="fas fa-chevron-down" style="left: auto; right: 1rem;"></i>
                            </div>
                        </div>

                        <div class="form-group span-3">
                            <label for="institucion_egreso">Institución de Egreso</label>
                            <div class="input-wrapper">
                                <i class="fas fa-university"></i>
                                <input type="text" id="institucion_egreso" name="institucion_egreso" class="form-input" placeholder="Ej: UMSA">
                            </div>
                        </div>

                        <div class="form-group span-3">
                            <label for="titulo_academico">Título Académico</label>
                            <div class="input-wrapper">
                                <i class="fas fa-certificate"></i>
                                <input type="text" id="titulo_academico" name="titulo_academico" class="form-input" placeholder="Ej: Licenciado">
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="nivel_estudio">Nivel de Estudio</label>
                            <div class="input-wrapper">
                                <i class="fas fa-layer-group"></i>
                                <select id="nivel_estudio" name="nivel_estudio" class="form-select">
                                    <option value="Licenciatura">Licenciatura</option>
                                    <option value="Diplomado">Diplomado</option>
                                    <option value="Maestría">Maestría</option>
                                    <option value="Doctorado">Doctorado</option>
                                </select>
                                <i class="fas fa-chevron-down" style="left: auto; right: 1rem;"></i>
                            </div>
                        </div>

                        <div class="form-group span-2">
                           <label for="anos_experiencia">Años Exp.</label>
                           <div class="input-wrapper">
                               <i class="fas fa-history"></i>
                               <input type="number" id="anos_experiencia" name="anos_experiencia" class="form-input" placeholder="0" min="0">
                           </div>
                       </div>

                        <div class="form-group span-2">
                            <label for="tipo_contrato">Tipo de Contrato <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-file-contract"></i>
                                <select id="tipo_contrato" name="tipo_contrato" class="form-select" required>
                                    <option value="tiempo_completo">Tiempo Completo</option>
                                    <option value="medio_tiempo">Medio Tiempo</option>
                                    <option value="por_horas">Por Horas</option>
                                </select>
                                <i class="fas fa-chevron-down" style="left: auto; right: 1rem;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="form-status-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>Información Segura</span>
                        </div>
                        <div class="action-buttons">
                            <a href="{{ route('admin.docentes.index') }}" class="btn-cancel">Cancelar</a>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-save"></i>
                                <span>Guardar Docente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/docentes/create.js') }}"></script>
@endsection