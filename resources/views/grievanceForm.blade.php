<!DOCTYPE html>
<html lang="en">
<head>


@include('includes.fronthead')
   

<!--Loading bootstrap css-->
 <style>

        
      .banner_subpage5 {

        background-image: url('/uploads/banners/{{$banner}}');
          background-repeat: no-repeat;
          background-position: center top;
          height: 400px;
          width: 100%;
            
      }
    </style>
</head>
<body>


            <!-- End nav_logo-->
              
            <!-- Slide -->
            
              <header class="slide1">   
            <!-- nav_logo-->
            <div class="nav_logo animated fadeInDown delay1">            
                <div class="container">
                    <div class="row-fluid">

                        <!-- Logo-->
                        <div class="span3 logo"><a href="/" title="Back to Home"><img src="{{ url() }}/img/index/logo.png" alt="Far East Holdings Berhad"></a></div>
                        <!-- End Logo-->
                                                      
                        <!-- Nav-->
                       @include('includes.fronttopmenu')
                        <!-- End Nav-->
                    </div>
                </div>
            </div>

                        <div class="banner_subpage5"></div>
                        

            <!-- Info section Title-->

            <div class="section_title1">
              <div class="container">
                <div class="row-fluid animated fadeInUp delay1">
                    <div class="span5">
                       <h1>Grievance Procedure</h1>
         
                    </div>
                  <div class="span7" style="font-family: 'Open Sans', sans-serif, font-size: 16px;">
                     <p>Oil Palm Plantation Investment Holdings</p>
                  </div>
                </div>
              </div>
            </div>
            </header>
        <!-- End Header-->
        
           <!-- crumbs-->
<div class="crumbs border_bottom">
            <div class="container">
              <ul>
                                <li>
                                                                                  
                      
                    <a href="http://cms.fareastholdingsbhd.com">Home</a>
                                    </li>
                                <li>/</li>
                                                <li>
                                          
                                                              
                    <a href="http://bursa.fareastholdingsbhd.com">Investor Relations</a>
                                    </li>
                                <li>/</li>
                                                <li>
                                        Sustainability 
                                    </li>
                                <li>/</li>
                                                <li>
                                        Grievance Procedure
                                    </li>
                                              </ul>
            </div>        
  </div>
        <!-- End crumbs-->   
        
 
        
        

        <!-- End content info -->
        <section class="content_info">
            
                    
            <!-- Info white-->
            <div class="info_white1 border_bottom">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                             <h2 class="red-title">Submit Grievance</h2>
                             <p>We receive grievances from all our stakeholders to ensure the compliance of our Sustainable Palm Oil Policy. Please submit your grievance to:</p>
                             <h5>Far East Holdings Berhad (14809-W)<br/>Level 23, Menara Zenith, Jalan Putra Square 6, 25200 Kuantan, Pahang Darul Makmur, Malaysia</h5>
<ul class="unstyled">
                                <li><span class="label label-info">Tel:</span> +(609) 514-1936 / 514-1948 / 514-1339</li>
            <li><span class="label label-warning">Fax:</span> +(609) 513-6211</li>
                                <li><span class="label label-success">E-mail:</span> <a href="mailto:fareast@fareh.po.my">fareast@fareh.po.my</a></li>
                             </ul>
                      </div>

                    </div>
                </div>
                <i class="icon-map-marker right"></i>
            </div>
            
            <!-- End Info white-->
            <div class="clearfix"></div>
            
            <!-- Info resalt-->
            <div class="info_resalt border_bottom">
                <div class="container">                    
                    <h5>Please fill in the form below </h5>
                    <div class="row-fluid">
                        <form action="{{url('save_gravience')}}" id="form1" method="post" enctype="multipart/form-data">
                    
                        <div class="span6">

                            <h6>Name <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Name" placeholder="Your Name">
                            <h6>Company Name <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="CompanyName" placeholder="Company Name">
                            <h6>Job Title <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="JobTitle" placeholder="Job Title">
                            <h6>E-mail Address <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Email" placeholder="E-mail Address">
                            <h6>Telephone <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Phone" placeholder="Telephone">
                          
                          <div class="clearfix"></div>
                          
                            
                            
                            <h6>Detailed Description of The Grievance <span class="red-title">*</span></h6>
                            <textarea required="" class="input-xxlarge" name="message1" placeholder="Your Message"></textarea>
                            
                            <h6>Evidence To Support The Grievance <span class="red-title">*</span></h6>
                             <input type="file" name="Submit" value="Browse"><br/>
                             (PDF, RTF, MS Word or JPEG file only)                           
                            
                            <h6>Please enter the Recaptcha: <span class="red-title">*</span></h6>
                                
                                
                                <script type="text/javascript">
    var RecaptchaOptions = {"curl_timeout":1};
</script>
<script src='https://www.google.com/recaptcha/api.js?render=onload'></script>
<div class="g-recaptcha" data-sitekey="6LcxL3IUAAAAAMMOvFnBPGRlxrBjBOxQiNc2lCSk"></div>
<noscript>
  <div style="width: 302px; height: 352px;">
    <div style="width: 302px; height: 352px; position: relative;">
      <div style="width: 302px; height: 352px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LcxL3IUAAAAAMMOvFnBPGRlxrBjBOxQiNc2lCSk"
                frameborder="0" scrolling="no"
                style="width: 302px; height:352px; border-style: none;">
        </iframe>
      </div>
      <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0px; padding: 0px; resize: none;" value="">
        </textarea>
      </div>
    </div>
  </div>
</noscript> <br>
                            
                            <input type="submit" class="button" value="Submit" name="Submit">
                             
                            <div id="result"></div>  
                        </div>

                        <div class="span6">
                        
                            <h6>Address <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="Address" placeholder="Address">
                            <h6>City <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="City" placeholder="City">
                            <h6>State <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="State" placeholder="State">
                            <h6>Postal Code <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="PostalCode" placeholder="Postal Code">
                            <h6>Country <span class="red-title">*</span></h6>
                            <select class="input-xlarge" id="DDLCountry" name="DDLCountry">
                                      <option value="Afghanistan">Afghanistan</option>
                                      <option value="Albania">Albania</option>
                                      <option value="Algeria">Algeria</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Andorra">Andorra</option>
                                      <option value="Angola">Angola</option>
                                      <option value="Anguilla">Anguilla</option>
                                      <option value="Antarctica">Antarctica</option>
                                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                      <option value="Argentina">Argentina</option>
                                      <option value="Armenia">Armenia</option>
                                      <option value="Aruba">Aruba</option>
                                      <option value="Australia">Australia</option>
                                      <option value="Austria">Austria</option>
                                      <option value="Azerbaijan">Azerbaijan</option>
                                      <option value="Bahamas">Bahamas</option>
                                      <option value="Bahrain">Bahrain</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="Barbados">Barbados</option>
                                      <option value="Belarus">Belarus</option>
                                      <option value="Belgium">Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda">Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia">Bolivia</option>
                                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                      <option value="Botswana">Botswana</option>
                                      <option value="Bouvet Island">Bouvet Island</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                      <option value="Brunei">Brunei</option>
                                      <option value="Bulgaria">Bulgaria</option>
                                      <option value="Burkina Faso">Burkina Faso</option>
                                      <option value="Burundi">Burundi</option>
                                      <option value="Cambodia">Cambodia</option>
                                      <option value="Cameroon">Cameroon</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Cape Verde">Cape Verde</option>
                                      <option value="Cayman Islands">Cayman Islands</option>
                                      <option value="Central African Republic">Central African Republic</option>
                                      <option value="Chad">Chad</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Christmas Island">Christmas Island</option>
                                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                      <option value="Colombia">Colombia</option>
                                      <option value="Comoros">Comoros</option>
                                      <option value="Congo">Congo</option>
                                      <option value="Congo (DRC)">Congo (DRC)</option>
                                      <option value="Cook Islands">Cook Islands</option>
                                      <option value="Costa Rica">Costa Rica</option>
                                      <option value="Côte d`Ivoire">C�te d`Ivoire</option>
                                      <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czech Republic">Czech Republic</option>
                                      <option value="Denmark">Denmark</option>
                                      <option value="Djibouti">Djibouti</option>
                                      <option value="Dominica">Dominica</option>
                                      <option value="Dominican Republic">Dominican Republic</option>
                                      <option value="East Timor">East Timor</option>
                                      <option value="Ecuador">Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El Salvador">El Salvador</option>
                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                      <option value="Eritrea">Eritrea</option>
                                      <option value="Estonia">Estonia</option>
                                      <option value="Ethiopia">Ethiopia</option>
                                      <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                      <option value="Faroe Islands">Faroe Islands</option>
                                      <option value="Fiji Islands">Fiji Islands</option>
                                      <option value="Finland">Finland</option>
                                      <option value="France">France</option>
                                      <option value="French Guiana">French Guiana</option>
                                      <option value="French Polynesia">French Polynesia</option>
                                      <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Gambia">Gambia</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Germany">Germany</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Gibraltar">Gibraltar</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Greenland">Greenland</option>
                                      <option value="Grenada">Grenada</option>
                                      <option value="Guadeloupe">Guadeloupe</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Guatemala">Guatemala</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="GuineaBissau">GuineaBissau</option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                      <option value="Honduras">Honduras</option>
                                      <option value="Hong Kong SAR">Hong Kong SAR</option>
                                      <option value="Hungary">Hungary</option>
                                      <option value="Iceland">Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="Iran">Iran</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland">Ireland</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Ivory Coast">Ivory Coast</option>
                                      <option value="Jamaica">Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhstan">Kazakhstan</option>
                                      <option value="Kenya">Kenya</option>
                                      <option value="Kiribati">Kiribati</option>
                                      <option value="Korea">Korea</option>
                                      <option value="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                      <option value="Laos">Laos</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon">Lebanon</option>
                                      <option value="Lesotho">Lesotho</option>
                                      <option value="Liberia">Liberia</option>
                                      <option value="Libya">Libya</option>
                                      <option value="Liechtenstein">Liechtenstein</option>
                                      <option value="Lithuania">Lithuania</option>
                                      <option value="Luxembourg">Luxembourg</option>
                                      <option value="Macau SAR">Macau SAR</option>
                                      <option value="Macedonia Former Yugoslav Republic of">Macedonia Former Yugoslav Republic of</option>
                                      <option value="Madagascar">Madagascar</option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Malaysia" selected="selected">Malaysia</option>
                                      <option value="Maldives">Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Marshall Islands">Marshall Islands</option>

                                      <option value="Martinique">Martinique</option>
                                      <option value="Mauritania">Mauritania</option>
                                      <option value="Mauritius">Mauritius</option>
                                      <option value="Mayotte">Mayotte</option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Micronesia">Micronesia</option>
                                      <option value="Moldova">Moldova</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia">Mongolia</option>
                                      <option value="Montserrat">Montserrat</option>
                                      <option value="Morocco">Morocco</option>
                                      <option value="Mozambique">Mozambique</option>
                                      <option value="Myanmar">Myanmar</option>
                                      <option value="Namibia">Namibia</option>
                                      <option value="Nauru">Nauru</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherlands">Netherlands</option>
                                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                                      <option value="New Caledonia">New Caledonia</option>
                                      <option value="New Zealand">New Zealand</option>
                                      <option value="Nicaragua">Nicaragua</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria">Nigeria</option>
                                      <option value="Niue">Niue</option>
                                      <option value="Norfolk Island">Norfolk Island</option>
                                      <option value="North Korea">North Korea</option>
                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                      <option value="Norway">Norway</option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan">Pakistan</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Palestine">Palestine</option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                      <option value="Paraguay">Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Philippines">Philippines</option>
                                      <option value="Pitcairn Islands">Pitcairn Islands</option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal">Portugal</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Reunion">Reunion</option>
                                      <option value="Romania">Romania</option>
                                      <option value="Russia">Russia</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="Saipan">Saipan</option>
                                      <option value="Samoa">Samoa</option>
                                      <option value="San Marino">San Marino</option>
                                      <option value="São Tom�&copy; and Príncipe">S�o Tom� and Pr�ncipe</option>
                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                      <option value="Senegal">Senegal</option>
                                      <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                                      <option value="Seychelles">Seychelles</option>
                                      <option value="Sierra Leone">Sierra Leone</option>
                                      <option value="Singapore">Singapore</option>
                                      <option value="Slovakia">Slovakia</option>
                                      <option value="Slovenia">Slovenia</option>
                                      <option value="Solomon Islands">Solomon Islands</option>
                                      <option value="Somalia">Somalia</option>
                                      <option value="South Africa">South Africa</option>
                                      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                      <option value="Spain">Spain</option>
                                      <option value="Sri Lanka">Sri Lanka</option>
                                      <option value="St. Helena">St. Helena</option>
                                      <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                      <option value="St. Lucia">St. Lucia</option>
                                      <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                      <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                      <option value="Sudan">Sudan</option>
                                      <option value="Suriname">Suriname</option>
                                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                      <option value="Swaziland">Swaziland</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Switzerland">Switzerland</option>
                                      <option value="Syria">Syria</option>
                                      <option value="Taiwan">Taiwan</option>
                                      <option value="Tajikistan">Tajikistan</option>
                                      <option value="Tanzania">Tanzania</option>
                                      <option value="Thailand">Thailand</option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tokelau">Tokelau</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                      <option value="Tunisia">Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan">Turkmenistan</option>
                                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                      <option value="Tuvalu">Tuvalu</option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine">Ukraine</option>
                                      <option value="United Arab Emirates">United Arab Emirates</option>
                                      <option value="United Kingdom">United Kingdom</option>
                                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                      <option value="United States of America">United States of America</option>
                                      <option value="Uruguay">Uruguay</option>
                                      <option value="Uzbekistan">Uzbekistan</option>
                                      <option value="Vanuatu">Vanuatu</option>
                                      <option value="Vatican City">Vatican City</option>
                                      <option value="Venezuela">Venezuela</option>
                                      <option value="Vietnam">Vietnam</option>
                                      <option value="Virgin Islands">Virgin Islands</option>
                                      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Yugoslavia">Yugoslavia</option>
                                      <option value="Zaire">Zaire</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          
                          
                          
                            
                           
                        </div>
                      </form>
                    </div>
                   
                </div>
        </div>
            <!-- End Info resalt-->           
         
        
         </section>
        <!-- End content info-->

        <!-- BEGIN FOOTER -->
            <footer>
            <div class="container">
                <div class="row-fluid">

                    <!-- Contact Us-->
                    <div class="span12">
                       <ul class="contact_footer">
                           <li>
                                <i class="icon-headphones"></i> +(609) 514 1936 <i class="icon-envelope"></i> <a href="mailto:fareast@fareh.po.my"> fareast@fareh.po.my</a> <i class="icon-map-marker"></i> Level 23, Menara Zenith, Jalan Putra Square 6, 25200 Kuantan, Pahang Darul Makmur, Malaysia                          </li>
                         <li>&copy; 2020 Far East Holdings Berhad 197301001753 (14809-W). All Rights Reserved. <a href="http://www.webqom.com/web_design.html" target="_blank">Web Design Malaysia</a> &amp; <a href="http://www.webqom.com/web_hosting.html" target="_blank">Web Hosting Malaysia</a> </li>       
                        </ul>
                    </div>
                    <!-- Contact Us-->
                </div>
            </div>
        </footer>      
            <!-- END FOOTER --><!-- END FOOTER -->
        
   <!-- ======================= JQuery libs =========================== -->
        <!-- Always latest version of jQuery-->
       
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>  -->
        <script type="text/javascript">
        /* This is for update price */
  $('.updatePriceFront').click(function() {
    $('.updatePriceFront i').addClass('fa-spin');
     
   
          $.ajax({ 
                   type: "POST",
                   url: "http://bursa.fareastholdingsbhd.com/updatepricetickerfront",
                   dataType:'json',
                  // The key needs to match your method's input parameter (case-sensitive).
                  success: function(data){
                                      data['weekLow'] = Math.round(data['weekLow'] * 1000) / 1000;
                                      for(var key in data) {
                                          if(!isNaN(data[key])) {
                                              //data[key] = Math.round(data[key] * 100) / 100;
                                              if(data[key].toString().split('.')[1] && data[key].toString().split('.')[1].length == 1) {
                                              data[key] += '0';
                                              }
                                              //data[key] = Math.round(data[key] * 100) / 100;
                                          }
                                      }
                                      $('#prevclose').html(data.prevClose);
                                      $('#stockopen').html(data.open);
                                      $('#valtraded').html(data.valueTraded);
                                      $('#dayhigh').html(data.dayHigh);
                                      $('#daylow').html(data.dayLow);
                                      $('#price').html(data.price);
                                      $('#change').html(data.change);
                                      $('#percent').html(data.changePercentage);
                                      
                                      if(data.change > 0) {
                                          $('#price').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#change').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#change').prev().removeClass('icon-arrow-down').addClass('icon-arrow-up');
                                      } else {
                                          $('#price').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#change').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#change').prev().removeClass('icon-arrow-up').addClass('icon-arrow-down');
                                      }
                                      
                                      if(data.changePercentage > 0) {
                                          $('#percent').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#percent').prev().removeClass('icon-arrow-down').addClass('icon-arrow-up');
                                      } else {
                                          $('#percent').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#percent').prev().removeClass('icon-arrow-up').addClass('icon-arrow-down');
                                      }
                                      
                                      if(parseFloat(data.dayLow) != '')
                                      {
                                       $('#daylow').html(data.dayLow);
                                      }
                                      if(parseFloat(data.weekHigh) != '')
                                      {
                                        $('#weekhigh').html(data.weekHigh);
                                      }
                                      if(parseFloat(data.weekLow) != '')
                                      {
                                       $('#weeklow').html(data.weekLow);
                                      }
                                       if(parseFloat(data.volumeTraded) != '')
                                      {
                                       $('#voltraded').html(data.volumeTraded);
                                      }
                                      //$('#valtraded').html(data.open);
                                      //$('#noshareissued').html(data.open);
                                      //$('#parvalue').html(data.open);
                                      //$('#shareperlot').html(data.open);
                                      //$('#marketcap').html(data.open);
                                      $('#quotelastupdated').html(data.quotelastupdated);
                                      //var blockCont = $('#left-block1-content').html();
                                      //var dateUpCont = $('#left-block2-title').html();
                                      //$('#textarea-left-block1-content').val(blockCont);
                                      //$('#textarea-left-block2-title').val(dateUpCont);
                                      //$('#corporategeneral').submit();
                                      $('.updatePrice i').removeClass('fa-spin');
                                      $('.pricepicket-tbl').show();
                                      },
                  failure: function(errMsg) {
                      
                }
          });
    });  
    $('.updatePriceFront').trigger('click');
    </script>
  
        <!-- jQuery local-->      
        <script>window.jQuery || document.write('<script src="http://bursa.fareastholdingsbhd.com/js/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- jQuery ui-->    
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/nav/superfish.js"></script>                                             
        <!--Totop-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/slide/camera.js" ></script>      
        <script type='text/javascript' src='http://bursa.fareastholdingsbhd.com/js/slide/jquery.easing.1.3.min.js'></script>   
        <!--flexsilider-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/carousel/jquery.flexslider.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/fancybox/jquery.fancybox-1.3.1.js"></script>  
        <!--Scrollama--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/scrollama/TweenMax.min.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/scrollama/jquery.superscrollorama.js"></script>    
        <!--Gallery Grid--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/filters/filters.js" ></script>                            
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/jquery-func.js"></script>
        
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/custom.js"></script>
         <!-- Start of high chart -->
    <script src="http://bursa.fareastholdingsbhd.com/vendors/jquery-highcharts/highcharts.js"></script>

    <script src="http://bursa.fareastholdingsbhd.com/vendors/jquery-highcharts/exporting.js"></script>

    <script src="http://bursa.fareastholdingsbhd.com/js/chart-line-charts.js"></script>

    <!-- End of high chart -->
    
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
        Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
           ga('create', 'UA-79192288-1', 'auto');
           ga('send', 'pageview');
        
        </script>
        
        <!-- ======================= End JQuery libs =========================== -->
 </body>
</html>