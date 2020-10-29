<?php
  /*
  Template Name: Tonnage Formula
  */
?>

<?php get_header(); ?>

<section id="tonnage-formula">
  <div class="container">
    <h1 class="text-center mt-5">
      <small class="text-muted">Clicker Press</small> <br>
      Tonnage Formula
    </h1>

    <div class="section-info my-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 my-3">
          <img class="img-fluid img-thumbnail d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-much-tonnage-of-swing-arm-clicker-press.png" alt="how much tonnage of swing arm clicker press">
        </div>

        <div class="col-lg-6 my-3">
          <h2 class="text-center mb-4">How Many Tons of <em>Clicker Press</em> Do I Need?</h2>

          <p>One of the most common questions we hear from someone in the market for a clicker press is&colon; <strong>&quot;How many tons do I need&quest;&quot;</strong></p>

          <p><strong>The short answer is</strong> &hyphen; let us test your material and your die on different machines and we’ll determine what is right for you.</p>

          <p><strong>The long answer is</strong> &hyphen; it is possible to calculate the exact tonnage by collecting the information required to complete the Tonnage Worksheet and submitting it to us. We can calculate the tonnage it will take to cut your product, from a particular material on a specific press with a certain cutting board.</p>

          <p>The challenge in most cases is the time it takes to collect all the necessary specifications to build the formula. In most cases, it will take longer and cost more in labor than simply having a die made and testing it on different tonnage machines. The tonnage needed to cut/emboss a material is strictly a function of the strength of the material, the shear power of the process being used to cut, the size of the image to cut, and other factors like flex in the machinery, ejection materials, air pressure build-ups, cutting board specifications and so on.</p>

          <p>These are the necessary factors that are required before determining how many tons you will need to cut with a specific die and material.</p>
        </div>
      </div>
    </div>

    <div class="tonnage_form mb-5">
      <h2>Tonnage Worksheet</h2>
      <!--start list-->
      <form 
        action="/tonnage-formula" 
        method="GET" 
        class="form-horizontal" 
        enctype="multipart/form-data" 
        id="tonnageFormulaForm">

        <div class="panel-container">
          <div class="panel" id="page2" >

            <h4 class="text-left my-5">Your Info</h4>

            <div class="row">
              <div class="form-group col-lg-6" >
                <div class="row">
                  <label class="col-lg-5">Name</label>
                  <div class="col-lg-7">
                    <input  type="text" value="" class="form-control" name="inquirer_name" >
                    <span class="error"></span>
                  </div>
                </div>
              </div>
            
              <div class="form-group col-lg-6">
                <div class="row">
                  <label class="col-lg-5">Email Address</label>
                  <div class="col-lg-7">
                    <input  type="text" value="" class="form-control" name="email"/>
                    <span class="error"></span>
                  </div>
                </div>
              </div> 
            </div>

            <hr/>
            
            <h4 class="text-left my-5">Size of Die</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Highest Point of die</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" value="" class="form-control" name="highpoint" >
                        <div class="input-group-append">
                          <span class="input-group-text">in</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Widest Point of Die</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input  type="text" value="" class="form-control" name="widepoint" >
                        <div class="input-group-append">
                          <span class="input-group-text">in</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Die Area</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input  type="text" value="" class="form-control" name="diearea"/>
                        <div class="input-group-append">
                          <span class="input-group-text">sq/cm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr/>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Type of Steel Rule</label>

                    <div class="col-lg-7">
                      <select name="srtype"  class="form-control" id="srtype" >
                        <option value="" selected="selected" disabled="disabled">Select one</option>
                        <option value="center">Center Cut</option>
                        <option value="side">Side Cut</option>
                        <option value="inside">Inside Cut</option>
                      </select>

                      <script type="text/javascript">
                        document.getElementById('srtype').value = "";
                      </script>

                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" >
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Steel Rule Height</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input  type="text" class="form-control" value="" name="srheight" >
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Steel Rule Thickness</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input  type="text" class="form-control" value="" name="srthickness" >
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Length of Bevel</label>
                    <div class="col-lg-7">
                      <select name="bevel" class="form-control" id="bevel">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option>3mm</option>
                        <option>4mm</option>
                        <option>5mm</option>
                        <option>6mm</option>
                        <option>7mm</option>
                        <option>8mm</option>
                        <option>9mm</option>
                        <option>10mm</option>
                      </select>
                      <span class="error"></span>
                      <script type="text/javascript">
                        document.getElementById('bevel').value = "";
                      </script>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Linear inches of steel rule</label>
                    <div class="col-lg-7">
                      <select name="LinearSteelRule" class="form-control" id="LinearSteelRule">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option>Cutting rule</option>
                        <option>Serated Rule</option>
                        <option>Bending rule</option>
                      </select>
                      <span class="error"></span>
                      <script type="text/javascript">
                        document.getElementById('LinearSteelRule').value = "";
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Grade of Steel Rule</label>
                    <div class="col-lg-7">
                      <select name="grd_of_steel"  class="form-control" id="grd_of_steel" >
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option value="Japan Steel Rule">Japan Steel Rule</option>
                        <option value="China Steel Rule">China Steel Rule</option>
                        <option value="USA Steel Rule">USA Steel Rule</option>
                      </select>
                      <script type="text/javascript">
                        document.getElementById('grd_of_steel').value = "";
                      </script>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Configuration of Design</label>
                    <div class="col-lg-7">
                      <input type="file" name="uploadfile" id="uploadfile" accept="image/*"  class="form-control" />
                      <span class="error">  </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- page2 -->
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Type of Clicker Press</label>
                    <div class="col-lg-7">
                      <select name="PressType" class="form-control" id="PressType">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option>Swing Arm Press</option>
                        <option>Beam Press</option>
                        <option>Travel Head Press</option>
                      </select>
                      
                      <span class="error"></span>
                      
                      <script type="text/javascript">
                        document.getElementById('PressType').value = "";
                      </script>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Size of Table</label>
                    <div class="col-lg-7">
                      <input type="text" name="size_table" value="" class="form-control" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Type of Material Being Cut</label>
                    <div class="col-lg-7">
                      <input type="text" name="type_material" value="" class="form-control" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Thickness of Material</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" name="tkMaterial" class="form-control"  value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Density factor of Material</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input name="dens_material" type="text" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">lbs/cu.ft</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Tensile Strength</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" name="tensileStr" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">lbs/sq.in</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Shear Strength</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" name="shrStr" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <h5 class="text-left">If present:</h5>
                  <div class="row">
                    <label class="col-lg-5">Fiber Length</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" name="fbrLength" value="" class="form-control" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <h5>If present:</h5>
                  <div class="row">
                    <label class="col-lg-5">Fiber Thickness</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="text" name="fbrThick" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr>

          <!-- page3 -->
          <div class="panel" id="page3">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Linear mm&apos;s of side by side rule <small class="text-muted">(rule that is closer than 10mm to another cut area)</small>:</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="linear_rule" type="text" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Ejection Material</label>
                    <div class="col-lg-7"> 
                      <input name="eject_material" type="text" class="form-control" value="" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr/>
            
            <h4 class="text-left my-5">Rubber</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Density</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="Rdensity" type="text" value="" class="form-control" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Total</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input name="Rtotal" type="text" value="" class="form-control" />
                        <div class="input-group-append">
                          <span class="input-group-text">sq/cm</span>
                        </div>
                      </div>    
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr/>

            <h4 class="text-left my-5">Foam</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Density</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="Fdensity" type="text" value="" class="form-control" />
                        <div class="input-group-append">
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>    
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Total</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="Ftotal" type="text" value="" class="form-control" />
                        <div class="input-group-append">
                          <span class="input-group-text">sq/cm</span>
                        </div>
                      </div>    
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr/>

            <h4 class="text-left my-5">Spring</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">PSI</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input name="psi" type="text" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text">lbs/sq.in</span>
                        </div>
                      </div>
                        <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Quantity</label>
                    <div class="col-lg-7"> 
                      <input name="qnty" type="text" class="form-control" value="" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr/>

            <div class="form-group">
              <div class="row">
                <label class="col-lg-5">Temperature of Working Environment</label>
                <div class="col-lg-7"> 
                  <div class="input-group">
                    <input  name="tempWork" type="text" class="form-control" value="" />
                    <div class="input-group-append">
                      <span class="input-group-text">F</span>
                    </div>
                  </div>
                    <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>

          <!-- page4 -->
          <div class="panel" id="page4" >
            <h4 class="text-left my-5">Cutting Board Specs</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Shore Hardness</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="shrHard" type="text" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text"><a href="https://en.wikipedia.org/wiki/Shore_durometer" target="_blank"><i class="fa fa-question-circle"></i></a></span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Notched Impact Strength</label>
                    <div class="col-lg-7"> 
                      <input name="impStr" type="text" class="form-control" value="" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Modulus of Elasticity</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="mdlElas" type="text" class="form-control" value=""; />
                        <div class="input-group-append">
                          <span class="input-group-text"><a href="https://en.wikipedia.org/wiki/Elastic_modulus" target="_blank"><i class="fa fa-question-circle"></i></a></span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Coefficient of Linear Expansion:</label>
                    <div class="col-lg-7"> 
                      <input name="lnrExpan" type="text" class="form-control" value="" />
                      <span class="error"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <label class="col-lg-5">Service Temperature</label>
                    <div class="col-lg-7"> 
                      <div class="input-group">
                        <input name="srvTemp" type="text" class="form-control" value="" />
                        <div class="input-group-append">
                          <span class="input-group-text"><a href="http://www.ensinger-online.com/en/technical-information/properties-of-plastics/thermal-properties/service-temperatures/" target="_blank" rel="nofollow"><i class="fa fa-question-circle"></i></a></span>
                        </div>
                      </div>
                      <span class="error"></span>
                    </div>
                  </div>                
                </div>
              </div>
            </div>
          </div>
        </div> <!-- panel-container -->

        <br/>

        <div class="d-flex justify-content-end">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button 
              type="button" 
              class="btn btn-lg btn-secondary" 
              onclick="resetValues()"
            >
              Reset
            </button>
            <button 
              name="submitted" 
              type="submit" 
              class="btn btn-lg btn-success"
            >
              Submit
            </button>
          </div>
        </div>

        <script>
          function resetValues() {
            document.getElementById("tonnageFormulaForm").reset();
          }
        </script>
      </form>
    </div> <!-- tonnage form -->
  </div>
</section>

<?php get_footer(); ?>