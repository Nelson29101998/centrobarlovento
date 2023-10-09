<div class="animate__animated animate__backInLeft">
    <form id="formPro" name="formPro" onsubmit="return crearProfesor()" method="post" action="subirSql/sqlProfesor.php">
        <table>
            <thead>
                <tr>
                    <th>
                        <h5>Datos personales</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="form-group">
                    <th>
                        <label for="nomPro" class="text-white">
                            <i class="fas fa-user-tie"></i> Nombre completo (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="nomPro" id="nomPro" maxlength="50" placeholder="Ingresa su nombre">
                    </th>
                    <th>
                        <label for="fechaPro" class="text-white">
                            <i class="fas fa-calendar"></i> Fecha de nacimmiento (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="date" class="form-control" id="fechaPro" name="fechaPro" value="" min="1950-01-01">
                    </th>
                </tr>
                <tr class="form-group">
                    <th>
                        <label for="rutPro" class="text-white">
                            <i class="fas fa-address-card"></i> Rut (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="rutPro" id="rutPro" maxlength="9" placeholder="Ingresa su rut">
                    </th>
                    <th class="form-group">
                        <label for="telefonoPro" class="text-white">
                            <i class="fas fa-phone"></i> Teléfono (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="telefonoPro" id="telefonoPro" maxlength="12" placeholder="Ingresa su teléfono">
                    </th>
                </tr>
                <tr class="form-group">
                    <th>
                        <label for="mailPro" class="text-white">
                            <i class="fas fa-at"></i> Mail (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="email" class="form-control" name="mailPro" id="mailPro" maxlength="50" placeholder="Ingresa su correo">
                    </th>
                    <th class="form-group">
                        <label for="direccionPro" class="text-white">
                            <i class="fas fa-map"></i> Direccion (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="direccionPro" id="direccionPro" maxlength="100" placeholder="Ingresa su dirección">
                    </th>
                </tr>
                <tr class="form-group">
                    <th>
                        <label for="areaPro" class="text-white">
                            <i class="fas fa-chalkboard"></i> Área docente (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="areaPro" id="areaPro" maxlength="100" placeholder="Ingresa su Área docente">
                    </th>
                    <th>
                        <label for="otroPro" class="text-white">
                            <i class="fa-regular fa-comment"></i> Otros datos:
                        </label>
                        <input type="text" class="form-control" name="otroPro" id="otroPro" maxlength="100" placeholder="Ingrese">
                    </th>
                </tr>
                <?php
                // include_once("cursoProf.php");
                ?>
            </tbody>
        </table>

        <br>

        <table>
            <thead>
                <tr>
                    <th>
                        <h5>Cuenta del profesor</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="form-group">
                    <th>
                        <label for="userPro" class="text-white">
                            <i class="fas fa-address-card"></i> Usuario (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="text" class="form-control" name="userPro" id="userPro" maxlength="50" placeholder="Ingresa su usuario">
                    </th>
                </tr>
                <tr class="form-group">
                    <th>
                        <label for="contrPro" class="text-white">
                            <i class="fas fa-key"></i> Contraseña (<i class="fa-solid fa-asterisk fa-2xs"></i>):
                        </label>
                        <input type="password" class="form-control" name="contrPro" id="contrPro" maxlength="20" placeholder="Ingresa su contrasena">
                    </th>
                </tr>
            </tbody>
        </table>

        <br>

        <table>
            <thead>
                <tr>
                    <th>
                        <h5>Datos Bancarias</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="form-group">
                    <th>
                        <label for="bancoPro" class="text-white">
                            <i class="fa-solid fa-building-columns"></i> Banco:
                        </label>
                        <input type="text" class="form-control" name="bancoPro" id="bancoPro" maxlength="50" placeholder="Ingresa su Banco">
                    </th>
                    <th>
                        <label for="tipoBanc" class="text-white">
                            <i class="fa-solid fa-piggy-bank"></i> Tipo de cuenta (Corrioente, Vista, RUT):
                        </label>
                        <select class="form-select" name="tipoBanc" id="tipoBanc">
                            <option selected>Seleccion de tipo de cuenta</option>
                            <option value="Corrioente">Corrioente</option>
                            <option value="Vista">Vista</option>
                            <option value="RUT">RUT</option>
                        </select>
                        <br>
                        <input type="text" class="form-control" name="tipoDatoPro" id="tipoDatoPro" maxlength="30" placeholder="Ingresa su codigo">
                    </th>
                </tr>
                <tr class="form-group">
                    <th>
                        <label for="nombreBanco" class="text-white">
                            <i class="fa-regular fa-address-card"></i> A nombre de:
                        </label>
                        <input type="text" class="form-control" name="nombreBanco" id="nombreBanco" maxlength="50" placeholder="Ingresa su nombre">
                    </th>
                    <th>
                        <label for="rutBanco" class="text-white">
                            <i class="fa-solid fa-id-card"></i> RUT:
                        </label>
                        <input type="text" class="form-control" name="rutBanco" id="rutBanco" maxlength="12" placeholder="Ingresa su rut">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="mailBanco" class="text-white">
                            <i class="fas fa-at"></i> Mail:
                        </label>
                        <input type="email" class="form-control" name="mailBanco" id="mailBanco" maxlength="50" placeholder="Ingresa su correo">
                    </th>
                    <th>
                        <label for="ObserBanco" class="text-white">
                            <i class="fa-solid fa-box-archive"></i> Observaciones:
                        </label>
                        <input type="text" class="form-control" name="ObserBanco" id="ObserBanco" maxlength="100" placeholder="Ingresa su Observaciones">
                    </th>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-floppy-disk"></i> Guardar
            </button>

            <button type="reset" class="btn btn-success">
                <i class="fas fa-recycle"></i> Limpiar
            </button>
        </div>
    </form>
</div>
<br>

<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
    <div class="text-center">
        <?php include_once "avisar/toasts.html"; ?>
    </div>
</div>

<br>

<?php
//* Lista de Profesor
include_once "verListaProfesor.php"
?>