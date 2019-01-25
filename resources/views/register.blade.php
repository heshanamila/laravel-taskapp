<form id="user-form" action="{{ route('register') }}" method="POST" role="form" style="display: block;">
    @csrf
    <div class="form-group row">
        <label for="honorific" class="col-md-4 col-form-label text-md-right">{{ __('Honorific') }}</label>
        <div class="col-md-6">
            <input id="honorific" type="text" class="form-control{{ $errors->has('honorific') ? ' is-invalid' : '' }}" name="honorific" value="{{ old('honorific') }}" required autofocus>
            @if ($errors->has('honorific'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('honorific') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
        <div class="col-md-6">
            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
            @if ($errors->has('lastname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
        <div class="col-md-6">
            <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
            @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
        <div class="col-md-6">
            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>
        <div class="col-md-6">
            <input id="nic" type="text" class="form-control{{ $errors->has('nic') ? ' is-invalid' : '' }}" name="nic" value="{{ old('nic') }}" required autofocus>
            @if ($errors->has('nic'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nic') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div> 
    <input id="role" type="hidden" class="form-control" name="role" value="user">
    <br>
    <div class="form-group row mb-0" style="padding-left:250px;">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
<form id="register-form" action="{{ route('reglawyer.store') }}" method="post" role="form" style="display: none;" enctype="multipart/form-data">
    <div class="palert palert-info" style="color:#002700">
        @if(session()->has('message'))
            <script>
                $('#register-form').addClass('active');
                $("#register-form").delay(100).fadeIn(100);
                $("#user-form").fadeOut(100);
                $('#user-form-link').removeClass('active');
                $('#register-form-link').addClass('active');
            </script>
            {{ session()->get('message') }}
        @endif
    </div>
    {{ csrf_field() }}
    <fieldset>
        <legend><span class="number">1</span>Your basic info</legend>
        <label class="plabel" for="honorific">Honorific:</label>
        <select id="honorific" name="honorific">
            <option value="Dr">Dr</option>
            <option value="Mr">Mr</option>
            <option value="Miss">Miss</option>
            <option value="Mrs">Mrs</option>   
        </select>
        <label class="plabel" for="firstName">First Name:</label>
        <input  type="ptext" id="first Name" name="firstName" pattern="[a-zA-Z. ]{2,30}"  required/><span></span>
        
        <label class="plabel" for="lastName">last Name:</label>
        <input type="ptext" id="last Name" name="lastName" pattern="[a-zA-Z. ]{2,30}"  required><span ></span>
        
        <label class="plabel">Gender:</label>
        <input type="radio" id="gender" value="male" name="gender"><label for="gender" class="light" required>male</label>
        <input type="radio" id="gender" value="female" name="gender"><label for="gender" class="light" required>female</label><br><br>
        
        <label class="plabel" for="email">Email:</label><br>
        <input type="email" id="email" name="Email" pattern="{6,}"  required ><span ></span>
    
        <label class="plabel" for="nic">NIC/Passport Number:</label>
        <input type="ptext" id="NIC" name="NIC_passportNumber"pattern="[V0-9]{10}"  required><span ></span>
        
        <label class="plabel" for="barnumber">Bar Number:</label>
        <input type="ptext" id="bar" name="barnumber"pattern="[V0-9]{10}"  required><span ></span>
    
        <label class="plabel" for="password">Password:</label>
        <input type="password" id="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,30}"  required><span ></span><br>
        
        <div id="message">
            <h6>Password must contain the following:</h6>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>5 characters</b></p>
        </div>
    
        <script>
            var myInput = document.getElementById("Password");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
            }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if(myInput.value.length >= 5) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
            }
        </script>

        <label class="plabel" for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" onkeyup="checkPass(); " required ><br>
        <span id="confirmMessage" class="confirmMessage"></span>
    </fieldset>

    <fieldset>
        <legend><span class="number">2</span>Your profile</legend>
        <label class="plabel" for="bio">Biography:</label>
        <textarea id="bio" name="biography"></textarea>
    </fieldset>
    
    <fieldset>
        <label class="plabel" for="job">Specialist Area:</label>
        <select id="job" name="Specialist_Area" required>
            <option value="All">All</option>
            <option value="Debt Recovery">Debt Recovery</option>
            <option value="Business">Business</option>
            <option value="Contracts and Litigation">Contracts and Litigation</option>
            <option value="Criminal Charges">Criminal Charges</option>
            <option value="Employment and Labor">Employment and Labor</option>
            <option value="Family">Family</option>
            <option value="Government and Health">Government and Health</option>
            <option value="Immigration">Immigration</option>
            <option value="Intellectual Property">Intellectual Property</option>
            <option value="Personal Injury">Personal Injury</option>
            <option value="Real Estate">Real Estate</option>
            <option value="Taxation">Taxation</option>
            <option value="Trusts and Estates">Trusts and Estates</option>
            <option value="Company Secretarial">Company Secretarial</option>
            <option value="Notarial Services">Taxation</option>
        </select>
        <br>
        <br>
        <label class="plabel" for="profile image"style="display: inline-block;">Profile Image(.jpg/.png)</label>
        <br>
        <input type="file" name="file" id="file">
        <br>
        <br>
        @if(count($errors)>0)
            <ul style="color: red">
                @foreach($errors->get('file') as $error)
                    <li>{{$error}}</li>  
                @endforeach
            </ul>
        @endif
        <label class="plabel" for="experiance_years">Experience Years:</label>
        <input type="number" id="Experience_Period" name="Experience_Period" min="0" required><span ></span>
            @if(count($errors)>0)
                <ul style="color: red">
                    @foreach($errors->get('Experience_Period') as $error)
                        <li>{{$error}}</li>  
                    @endforeach
                </ul>
            @endif
        <label class="plabel" for="service_place">Service Place:</label>
        <input type="ptext" id="Address" name="Address" max="100">
        <label class="plabel" for="tpnumber">Contact number:</label>
        <input type="ptel" id="TP_Number" name="TP_Number" pattern="[0-9]{10}" required><span></span>
        @if(count($errors)>0)
            <ul style="color: red">
                @foreach($errors->get('TP_Number') as $error)
                    <li>{{$error}}</li>  
                @endforeach
            </ul>
        @endif
        <label class="plabel" for="fee">Online Consultation Fee(per hour):</label>
        <input type="ptext" id="consultationFee" name="consultationFee" placeholder="LKR">
        <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
        <input type="submit" class="pbutton" value= "Register" >
    </fieldset>
</form>