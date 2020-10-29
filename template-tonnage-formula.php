<?php
  /*
  Template Name: Tonnage Formula
  */
?>

<?php get_header(); ?>

<section id="tonnage-formula" class="my-5">
  <div class="container">
    <h1 class="text-center">
      <small class="text-muted">Clicker Press</small> <br>
      Tonnage Formula
    </h1>
  </div>


  <div class="container tonnage_form">
    <h2>Tonnage Worksheet</h2>
    
    <!--start list-->
    <form 
      action="" 
      method="GET" 
      class="form-horizontal" 
      enctype="multipart/form-data" 
      id="tonnageFormulaForm">

      <div class="panel-container">
        <div class="panel" id="page2" >

          <h4 class="text-left">Your Info</h4><br/><br/>


          <div class="row">
            <!-- <div class="col-md-6"> -->
              <div class="form-group col-md-6" >
                <div class="form-row">
                  <label class="col-md-5">Name</label>
                  <div class="col-md-7">
                    <input  type="text" value="" class="form-control" name="inquirer_name" >
                    <span class="error"></span>
                  </div>
                </div>
              </div>
            <!-- </div> -->
            <!-- <div class="col-md-6"> -->
              <div class="form-group col-md-6">
                <div class="form-row">
                  <label class="col-md-5">Email Address</label>
                  <div class="col-md-7">
                    <input  type="text" value="" class="form-control" name="email"/>
                    <span class="error"></span>
                  </div>
                </div>
              </div> 
            <!-- </div> -->
          </div>


          <!-- <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group" >
                <label class="col-md-5">Name</label>
                <div class="col-md-7">
                  <input  type="text" value="" class="form-control" name="inquirer_name"/>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Email Address</label>
                <div class="col-md-7">
                  <input  type="text" value="" class="form-control" name="email"/>
                  <span class="error"></span>
                </div>
              </div> 
            </div>
          </div> -->

          <hr/>
          
          <h4 class="text-left">Size of Die</h4><br/><br/>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Highest Point of die</label>

                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" value="" class="form-control" name="highpoint" >
                    <div class="input-group-append">
                      <span class="input-group-text">in</span>
                    </div>
                  </div>
                </div>
                
                <!-- <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" value="" class="form-control" name="highpoint"/>
                    <span class="input-group-addon">in</span>
                  </div>
                    <span class="error"></span>
                </div> -->

              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Widest Point of Die</label>
                
                <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" value="" class="form-control" name="widepoint" >
                    <div class="input-group-append">
                      <span class="input-group-text">in</span>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" value="" class="form-control" name="widepoint"/>
                    <span class="input-group-addon">in</span>
                  </div>
                  <span class="error"></span>
                </div> -->

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Die Area</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" value="" class="form-control" name="diearea"/>
                    <span class="input-group-addon">sq/cm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Type of Steel Rule</label>
                <div class="col-md-7">
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

          <div class="row" >
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-5">Steel Rule Height</label>
                
                <!-- <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" class="form-control" value="" name="srheight"/>
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div> -->

                <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" class="form-control" value="" name="srheight"/>
                    <div class="input-group-append">
                      <span class="input-group-text">mm</span>
                    </div>
                  </div>
                </div>


              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-5">Steel Rule Thickness</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input  type="text" class="form-control" value="" name="srthickness"/>
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Length of Bevel</label>
                <div class="col-md-7">
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
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label class="col-md-5">Linear inches of steel rule</label>
                    <div class="col-md-7">
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

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Grade of Steel Rule</label>
                <div class="col-md-7">
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
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Configuration of Design</label>
                <div class="col-md-7">
                  <input type="file" name="uploadfile" id="uploadfile" accept="image/*"  class="form-control" />
                  <span class="error">  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- page2 -->
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Type of Clicker Press</label>
                <div class="col-md-7">
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
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Size of Table</label>
                <div class="col-md-7">
                  <input type="text" name="size_table" value="" class="form-control" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Type of Material Being Cut</label>
                <div class="col-md-7">
                  <input type="text" name="type_material" value="" class="form-control" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Thickness of Material</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="tkMaterial" class="form-control"  value="" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Density factor of Material</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input name="dens_material" type="text" class="form-control" value="" />
                    <span class="input-group-addon">lbs/cu.ft</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Tensile Strength</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="tensileStr" class="form-control" value="" />
                    <span class="input-group-addon">lbs/sq.in</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Shear Strength</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="shrStr" class="form-control" value="" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <h5 class="text-left">If present:</h5>
                <label class="col-md-5">Fiber Length</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="fbrLength" value="" class="form-control" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <h5>If present:</h5>
                <label class="col-md-5">Fiber Thickness</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="fbrThick" class="form-control" value="" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- page3 -->
        <div class="panel" id="page3">
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Linear mm's of side by side rule <small class="text-muted">(rule that is closer than 10mm to another cut area)</small>:</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="linear_rule" type="text" class="form-control" value="" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Ejection Material</label>
                <div class="col-md-7"> 
                  <input name="eject_material" type="text" class="form-control" value="" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>
          
          <h4 class="text-left mt-5">Rubber</h4><br/><br/>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Density</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="Rdensity" type="text" value="" class="form-control" />
                    <span class="input-group-addon">mm</span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Total</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input name="Rtotal" type="text" value="" class="form-control" />
                    <span class="input-group-addon">sq/cm</span>
                  </div>    
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>

          <h4 class="text-left mt-5">Foam</h4><br/><br/>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Density</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="Fdensity" type="text" value="" class="form-control" />
                    <span class="input-group-addon">mm</span>
                  </div>    
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Total</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="Ftotal" type="text" value="" class="form-control" />
                    <span class="input-group-addon">sq/cm</span>
                  </div>    
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>

          <h4 class="text-left mt-5">Spring</h4><br/><br/>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">PSI</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input name="psi" type="text" class="form-control" value="" />
                    <span class="input-group-addon">lbs/sq.in</span>
                  </div>    
                    <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Quantity</label>
                <div class="col-md-7"> 
                  <input name="qnty" type="text" class="form-control" value="" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <hr/>

          <div class="form-group">
            <label class="col-md-5">Temperature of Working Environment</label>
            <div class="col-md-7"> 
              <div class="input-group">
                <input  name="tempWork" type="text" class="form-control" value="" />
                <span class="input-group-addon">F</span>
              </div>
                <span class="error"></span>
            </div>
          </div>
        </div>

        <!-- page4 -->
        <div class="panel" id="page4" >
          <h4 class="text-left">Cutting Board Specs</h4><br/><br/>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Shore Hardness</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="shrHard" type="text" class="form-control" value="" />
                    <span class="input-group-addon"><a href="https://en.wikipedia.org/wiki/Shore_durometer" target="_blank"><i class="fa fa-question-circle"></i></a></span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Notched Impact Strength</label>
                <div class="col-md-7"> 
                  <input name="impStr" type="text" class="form-control" value="" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Modulus of Elasticity</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="mdlElas" type="text" class="form-control" value=""; />
                    <span class="input-group-addon"><a href="https://en.wikipedia.org/wiki/Elastic_modulus" target="_blank"><i class="fa fa-question-circle"></i></a></span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Coefficient of Linear Expansion:</label>
                <div class="col-md-7"> 
                  <input name="lnrExpan" type="text" class="form-control" value="" />
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label class="col-md-5">Service Temperature</label>
                <div class="col-md-7"> 
                  <div class="input-group">
                    <input name="srvTemp" type="text" class="form-control" value="" />
                    <span class="input-group-addon"><a href="http://www.ensinger-online.com/en/technical-information/properties-of-plastics/thermal-properties/service-temperatures/" target="_blank" rel="nofollow"><i class="fa fa-question-circle"></i></a></span>
                  </div>
                  <span class="error"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- panel-container -->

      <br/>

      <div class="btn-group pull-right" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-lg btn-secondary" onclick="resetValues()">Reset</button>
        <button name="submitted" type="submit" class="btn btn-lg btn-success">Submit</button>
      </div>

      <script>
        function resetValues() {
          document.getElementById("tonnageFormulaForm").reset();
        }
      </script>
    </form>
  </div> <!-- tonnage form -->
</section>

<?php get_footer(); ?>