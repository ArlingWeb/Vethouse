<html lang="es" class="no-js">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/strength.css">
    <script src="js/password_strength.js"></script>
    <script src="js/jquery-strength.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!--
    Realised by Thibault Leveau
    https://www.linkedin.com/in/thibault-leveau-a76923ba/

-->
<script>
    // URLs images
var female_img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo8PcCxh7tT6MDFhJi2UaAT9SeciHqvZuaWtGg0y0-yyP8rMDz";
var male_img = "https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg";

// On page loaded
$( document ).ready(function() {
    // Set the sex image
    set_sex_img();
    
    // Set the "who" message
    set_who_message();

    // On change sex input
    $("#input_sex").change(function() {
        // Set the sex image
        set_sex_img();
        set_who_message();
    });

    // On change fist name input
    $("#first_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#first_name").val()).code == 0) {
            $("#first_name").attr("class", "form-control is-invalid");
            $("#first_name_feedback").html(validation_name($("#first_name").val()).message);
        } else {
            $("#first_name").attr("class", "form-control");
        }
    });

    // On change last name input
    $("#last_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#last_name").val()).code == 0) {
            $("#last_name").attr("class", "form-control is-invalid");
            $("#last_name_feedback").html(validation_name($("#last_name").val()).message);
        } else {
            $("#last_name").attr("class", "form-control");
        }
    });
});

/**
*   Set image path (Mr. or Ms.)
*/
function set_sex_img() {
    var sex = $("#input_sex").val();
    if (sex == "Doc.") {
        // male
        $("#img_sex").attr("src", male_img);
    } else {
        // female
        $("#img_sex").attr("src", female_img);
    }
}

/**
*   Set "who" message
*/
function set_who_message() {
    var sex = $("#input_sex").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    
    if (validation_name(first_name).code == 0 || 
        validation_name(last_name).code == 0) {
        // Informations not completed
        $("#who_message").html("Quien eres?");
    } else {
        // Informations completed
        $("#who_message").html(sex+" "+first_name+" "+last_name);
    }
}

/**
*   Validation function for last name and first name
*/
function validation_name (val) {
    if (val.length < 2) {
        // is not valid : name length
        return {"code":0, "message":"The name is too short."};
    }
    if (!val.match("^[a-zA-Z\- ]+$")) {
        // is not valid : bad character
        return {"code":0, "message":"The name use non-alphabetics chars."};
    }
    
    // is valid
    return {"code": 1};
}
/**
*   Validation pass
*/
function compara() { 

if (document.form_reg.password.value != document.form_reg.password1.value) {
alert('Las contraseña no son identicas, por favor reintente.');
return false; } 
else {
return true;
}
}
</script>
<script>
        jQuery(function($) {
            
            $(".check-seguridad").strength({
                templates: {
                toggle: '<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open {toggleClass}"></span></span>'
                
                },
                scoreLables: {
                        empty: 'Vacío',
                        invalid: 'Invalido',
                        weak: 'Débil',
                        good: 'Bueno',
                        strong: 'Fuerte'
                    }, 
                scoreClasses: {
                        empty: '',
                        invalid: 'label-danger',
                        weak: 'label-warning',
                        good: 'label-info',
                        strong: 'label-success'
                    },

            });
        });
    </script>
<style>
    body {
    background-color: #e9ebee;
}

.card {
    margin-top: 1em;
}

/* IMG displaying */
.person-card {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}
</style>
    <title>Registro medicos</title>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    VetHouse Médicos
  </a>
</nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light style="background-color: #fff;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</head>
<body>
   
<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
    <form name="form_reg" action="https://vethousecolombia.com/reg_usuario.php" method="POST">
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <img id="img_sex" class="person-img"
                    src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg">
                <h2 id="who_message" class="card-title">Quién eres?</h2>
                <!-- First row (on medium screen) -->
                <div class="row">
                    <div class="form-group col-md-2">
                        <select id="input_sex" class="form-control" name="genero" required="">
                            <option value="Doc.">Doc.</option>
                            <option value="Dra.">Dra.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="first_name" type="text" class="form-control" placeholder="Ingresa tu nombre" name="nombre">
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name" type="text" class="form-control" placeholder="Ingresa tu apellido" name="apellido">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cómo contactarte?</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="ejemplo@gmail.com" name="email" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Celular</label>
                            <input type="text" class="form-control" id="tel" placeholder="312 4533707" name="celular" required>
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cuál es tu identificación?</h2>
                        <div class="form-group">
                            <label for="identificacion" class="col-form-label">Tipo de documento</label>
                            <select id="" class="form-control" name="tipodocumento" required="">
                                <option value=""></option>
                                <option value="CC.">CC</option>
                                <option value="CE.">CE</option>
                                <option value="NUIP">NUIP</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                            </select>
                         </div>
                        <div class="form-group">
                            <label for="numerodocumento" class="col-form-label">Número de documento</label>
                        <input id="first_name" type="text" class="form-control" placeholder="Ingresa número de documento" name="numerodoc">
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                       </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Donde vives?</h2>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ej: Cra 57B # 4A - 45 Apto 401" name="direccion" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Ciudad</label>
                            <input type="text" class="form-control" id="" placeholder="Ciudad de residencia" name="ciudad" required>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">¡Asegura su cuenta!</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="check-seguridad form-control" id="password" placeholder="Escribe tu password" name="password" required>
                            <div class="password-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Confirmar Password</label>
                            <input type="password" class="check-seguridad form-control" id="password1" placeholder="Repite tu password" name="password1" required>
                            <div class="password_conf-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Y tus estudios?</h2>
                        <form enctype="multipart/form-data">
                
                <div class="form-group">
                    <input id="file-3" type="file" multiple=true>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-default" type="reset">Reset</button>
                </div>
            </form>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Tu experiencia</label>
                            <input type="number" class="form-control" id="" placeholder="Años de experiencia" name="experiencia" required>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Carga documentos!</h2>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Título profesional</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Cuál es su titulo Profesional?" name="titulo" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Hoja de vida</label>
                            <input type="number" class="form-control" id="" placeholder="Años de experiencia" name="experiencia" required>
                            
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="return compara();">REGISTRO</button>
        </div>
        </form>

</div>
    
</body>
</html>
   
	



