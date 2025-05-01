<div>
    <h2>User Form</h2>
    {{-- {{print_r($errors->all())}} --}}
    {{-- @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </divst>
    @endif --}}
        
    
        
    

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <label for="name">Name</label>
            <input type="text" placeholder="Enter Your Name" name="name" id="name" value="{{ old('name') }}"
            class="{{ $errors->has('name') ? 'error' : ''}}">
            {{-- <span style="color: red">{{ $errors->first('name') }}</span> --}}
            <span style="color: red">@error('name') {{ $message }}
            @enderror</span>
        </div>
        
        <div class="input-wrapper">
            <label for="email">Email</label>
            <input type="email" placeholder="Enter Your Email" name="email" id="email" value="{{ old('email') }}"
            class="{{ $errors->has('email') ? 'error' : ''}}">
            {{-- <span style="color: red">{{ $errors->first('email') }}</span> --}}
            <span style="color: red">@error('email') {{ $message }}
            @enderror</span>

        </div>
        
        <div class="input-wrapper">
            <label for="city">City</label>
            <input type="text" placeholder="Enter Your City" name="city" id="city" value="{{ old('city') }}"
            class="{{ $errors->has('city') ? 'error' : ''}}">
            <span style="color: red">{{ $errors->first('city') }}</span>
            {{-- <span style="color: red">@error('city') {{ $message }} --}}
        </div>
        
        <div>
            <h3>Select Your Skills</h3>
            <input type="checkbox" name="skill[]" value="php" id="php"> 
            <label for="php">PHP</label> 
            <input type="checkbox" name="skill[]" value="laravel" id="laravel"> 
            <label for="laravel">Laravel</label> 
            <input type="checkbox" name="skill[]" value="react" id="react"> 
            <label for="react">React</label>
            <input type="checkbox" name="skill[]" value="vue" id="vue"> 
            <label for="vue">Vue</label>
            {{-- <span style="color: red">{{ $errors->first('skill') }}</span> --}}
            <span style="color: red">@error('skill') {{ $message }} @enderror</span>
        </div>
        <div>
            <h3>Select Your Gender</h3>
            <input type="radio" name="gender" value="male" id="male"> 
            <label for="male">Male</label> 
            <input type="radio" name="gender" value="female" id="female"> 
            <label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
            {{-- <span style="color: red">{{ $errors->first('gender') }}</span> --}}
            <span style="color: red">@error('gender') {{ $message }} @enderror</span>
        </div>
        {{-- <div>
            <h3>Select Your City</h3>
            <select name="city">
                <option value="pune">Pune</option>
                <option value="mumbai">Mumbai</option>
                <option value="delhi">Delhi</option>
                <option value="banglore">Banglore</option>
                <span style="color: red">{{ $errors->first('city') }}</span>

            </select>
            
        </div> --}}
        <div>
            <h3>Select Your Age</h3>
            <input type="range" name="age" min="18" max="60">
            <span style="color: red">{{ $errors->first('age') }}</span>
        </div>
        <br>
        <div>
            <button type="submit">Add New User</button>
        </div>

       
        
    </form>
</div>

<style>
    input{
        padding: 3px;
        margin: 5px;
        border-radius: 5px;
        height: 20px;
        width: 200px;
        font-size: 20px;
        border: 1px solid orange;
    }
    .input-wrapper{
        margin: 5px;
    }
    button{
        padding: 3px;
        margin: 5px;
        border-radius: 5px;
        height: 30px;
        width: 200px;
        font-size: 20px;
        border: 1px solid orange;
        background-color: orange;
        cursor: pointer;

    }
</style>
    
