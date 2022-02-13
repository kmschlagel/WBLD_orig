<?php include 'header.php'; ?>

    <div id="form">
        <h1>Contact Us</h1>

        <p>White Bear Lift &amp; Dock Inc.<br>
            1930 Mahtomedi Ave.<br> Mahtomedi, MN 55115<br>(651) 653-6476</span></p>

        <p>Shop address (no mail):<br> 120 Derby Lane<br> Willernie, MN 55090</p>
        <p>Shop tours by appointment only</p>

        <p>Email: <a href="mailto:wbld@walkadock.com">wbld@walkadock.com</a></p>
        <p><a href="http://www.facebook.com/pages/White-Bear-Lift-Dock-Inc/353477108006953" target="blank">Visit us on
                Facebook</a></p>
        <fieldset>
            <legend>Fill out the following information, and we'll contact you with more details.</legend>
            <form id="contact" name="contact" action="sendmail.php" method="post">
                <p class="tinytext">Your privacy is important to us. The information collected will only be used to
                    contact
                    you and will never be shared with any third party.</p>
                <ul>
                    <li><label class="tinytext">(* required fields)</label></li>
                    <li><label for="name">Full Name:*</label><input value="<?= $_SESSION['form']['name'] ?>" type="text"
                                                                    size="50" id="name" name="name"/>
                    </li>
                    <li><label for="city">City:</label><input type="text" size="30" id="city" name="city"
                                                              value="<?= $_SESSION['form']['city'] ?>"/>
                    </li>
                    <li><label for="state">State:</label>
                        <select name="state" id="state" value="<?= $_SESSION['form']['state'] ?>">
                            <option value="none">Choose a State</option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">MY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>
                        </select>
                    </li>
                    <li><label for="phone">Phone:</label>
                        <input type="text" size="50" id="phone" name="phone" value="<?= $_SESSION['form']['phone'] ?>"/>
                    </li>
                    <li><label for="email">Email Address:*</label><input type="text" size="50"
                                                                         id="email"
                                                                         name="email"
                                                                         value="<?= $_SESSION['form']['email'] ?>"/>
                    </li>
                    <li><label>I would like information regarding:</label>
                        <label for="docks" class="checkbox">Docks</label><input type="checkbox" name="docks" id="docks"
                                                                                value="yes"/>
                        <label for="boat_lifts" class="checkbox">Boat Lifts</label><input type="checkbox"
                                                                                          name="boat_lifts"
                                                                                          id="boat_lifts" value="yes"/>
                        <label for="used_docks" class="checkbox">Used Docks</label><input type="checkbox"
                                                                                          name="used_docks"
                                                                                          id="used_docks" value="yes"/>
                        <label for="used_lifts" class="checkbox">Used Lifts</label><input type="checkbox"
                                                                                          name="used_lifts"
                                                                                          id="used_lifts" value="yes"/>
                        <label for="services" class="checkbox">Services</label><input type="checkbox" name="services"
                                                                                      id="services" value="yes"/>
                        <label>&nbsp;</label>
                        <label for="welding_fabrication" class="checkbox">Fabrication</label><input type="checkbox"
                                                                                                    name="welding_fabrication"
                                                                                                    id="welding_fabrication"
                                                                                                    value="yes"/>
                        <label for="other" class="checkbox">Other</label><input type="checkbox" name="other" id="other"
                                                                                value="yes"/>
                    </li>
                    <li><label for="other_info" class="lbl">Your Message:</label>
                        <textarea cols="50" rows="10" id="other_info" name="other_info"
                                  value="<?= $_SESSION['form']['other_info'] ?>"></textarea>
                    </li>
                    <li><label>&nbsp;</label>
                        <input type="submit" value="Submit"/>
                    </li>
                </ul>
            </form>
        </fieldset>
    </div> <!-- end of index_main -->
    <script>
        $('#contact').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                name: "Please specify your full name",
                email: {
                    required: "We need your phone number to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
<?php include 'footer.php'; ?>