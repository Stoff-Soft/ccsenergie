<?php 
include './components/head.php';
// Wrapper
include './components/wrapper_start.php';

    //Content
    include './components/nav.php';
    
    //Grid
    include './components/grid_start.php';
    ?>

    <div class="artikel ">

    <!-- Kontaktformulor -->

<h1>Setzen Sie sich mit uns in Verbindung!</h1>
        <div class="container24"> 
        <div  class="container23 boxshadow ">
          <!--Form with header-->

          <form action="mail.php" method="post">
            <div class="card rounded-0">
              <div class="card-header p-0">
                <div class="bg-primary text-white text-center py-2">
                  
                  <h3 class="ib">
                    <i class="fa fa-envelope"></i> Kontaktieren Sie uns!
                  </h3>

                  <p class="m-0">Wir helfen gerne.</p>
                </div>
              </div>
              <div class="card-body p-3">
                <!--Body-->
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-building text-secondary"></i>
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="firma"
                      name="firma"
                      placeholder="Ihre Firma"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user text-secondary"></i>
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Ihr Name"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-phone text-secondary"></i>
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="telefon"
                      name="telefon"
                      placeholder="Ihre Telefonnummer"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-envelope text-secondary"></i>
                      </div>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      id="mail"
                      name="e-Mail"
                      placeholder="mail@domain.com"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-comment text-secondary"></i>
                      </div>
                    </div>
                    <textarea
                      class="form-control"
                      placeholder="Ihre Nachricht an uns."
                      required
                    ></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <input
                    type="submit"
                    value="Abschicken"
                    class="btn btn-secondary btn-block rounded-0 py-2"
                  />
                </div>
              </div>
            </div>
          </form>
          <!--Form with header-->
        </div>
      </div>

      <!-- /Kontaktformular -->
        </div>



 

<?php

include './components/contact_ergaenzung.php';
    // /Grid 
    include './components/grid_end.php';

    include './components/contact.php';
    include './components/footer.php';


// /Wrapper
include './components/wrapper_end.php';

// Scripts
include './components/scripts.php';



?>