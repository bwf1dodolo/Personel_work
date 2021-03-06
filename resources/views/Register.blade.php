{{-- <form action="/Register" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="text" placeholder="Compant Name" name="CName"><br>
   <input type="Email" placeholder="Email" name="Email"><br>
   <input type="password" placeholder="Password" name="Password"><br>
   <input type="file" placeholder="Image" name="image" accept="image/*"><br>
   <input type="submit" value="SIGN UP">
</form> --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register|Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&family=Bree+Serif&display=swap"
    rel="stylesheet">
    <style>

    :root {
    --white: #fff;
    --black: #000;
    --darkGrayColor: #9b9b9b;
    --darkGrayColor2: #2f2f35;
    --loghtGrayColor: #e1e1e1;
    --darkGrayBackground: #2d2f30;
    --lightGreenColor: #b3d146;
    --lightFont: 'proxima_nova_altlight';
    --regularFont: 'proxima_novaregular';
    --boldFont: 'proxima_nova_altbold';
    --extraboldFont: 'proxima_novaextrabold';
}
    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
          
    }
    body{
             background: url({{asset('images/footer-bg.jpg')}}) center top no-repeat;
             background-size: cover;
             height: 45rem;
             position: relative;
             width: 100%;    
        }

    

.contact__form::after {
    background: rgba(0, 0, 0, .65);
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    min-height: 48rem;
    content: "";
}

.contact__left{
    padding: 3.5rem 0;
}

.contact__left {
    left:33%;
    width: 38%;
    position: relative;
    z-index: 1;
}

.contact__left h2 {
    color: var(--lightGreenColor);
    font-family: var(--boldFont);
    font-weight: 500;
    font-size: 2.6rem;
    line-height: normal;
    text-transform: uppercase;
    margin-bottom: 2rem;
    margin-left:25% auto;
}

.contact__left ul {
    list-style-type: none
}

.contact__left li {
    margin: 0 0 1.5rem;
    position: relative;
    float: left;
    width: 100%
}

.contact__left li .col__2 {
    float: left;
    width: 48%
}

.contact__left li .col__2:last-child {
    float: right;
}

.contact__left li label {
    color: var(--white);
    display: inline-block;
    margin: 0 0 .1rem;
    width: 100%;
    display: block;
}

.form .input {
    background: rgba(255, 255, 255, .18);
    border: 1px solid transparent;
    border-radius: 0px;
    color: var(--lightGreenColor);
    outline: none;
    width: 100%;
    height: 2.4rem;
    font-size: 1.2rem;
    font-family: var(--lightFont);
    transition: all .3s ease-in-out;
    outline: 0;
}

.form select.input {
    padding: 0.3rem;
    line-height: .5rem;
}

.form textarea.input {
    height: 7rem;
}

.form .input:focus {
    box-shadow: none;
    border-color: var(--white);
    background: rgba(255, 255, 255, .18);
    border: 1px solid var(--white);
}

@media (max-width: 1160px) {
    html {
        font-size: 9px;
    }
    
    .col__set__2 span {
        width: 48.5%;
        float: left
    }
    .col__set__2 span.set__right {
        float: right;
    }
}

small{
    color:white;
    float:right;
}
a{
    text-decoration: none;
    margin-top:3px;
}

 .btn {
    background: rgba(0, 0, 0, 0.5);
    border: .14rem solid var(--lightGreenColor);
    padding: 0 1.4rem;
    line-height: 2.2rem;
    height: 3rem;
    color: var(--white);
    font-size: 1.2rem;
    font-family: var(--boldFont);
    transition: all .5s ease 0s;
    -webkit-transition: all .5s ease 0s;
    margin-top: 0;
    display: inline-block;
}


@media (max-width: 1500px){
 body{
      height: 80rem;       
        }

.contact__form::after {
    min-height: 80rem;
    content: "";
}
}
@media (max-width: 1300px){
 body{
     
       background: url({{asset('images/footer-bg.jpg')}}) center top no-repeat;
       background-size: cover;
       height: 78rem;       
        }

.contact__form::after {
    min-height: 78rem;
    content: "";
}
}

@media (max-width: 1180px){
 body{
     
       background: url({{asset('images/footer-bg.jpg')}}) center top no-repeat;
       background-size: cover;
       height: 150rem;       
        }

.contact__form::after {
    min-height: 150rem;
    content: "";
}
}
@media (max-width: 500px){
 body{
     
       background: url({{asset('images/footer-bg.jpg')}}) center top no-repeat;
       background-size: cover;
       height: 93rem;       
        }

.contact__form::after {
    min-height: 93rem;
    content: "";
}
}
@media (max-width: 400px){
 body{
     
       background: url({{asset('images/footer-bg.jpg')}}) center top no-repeat;
       background-size: cover;
       height: 70rem;       
        }

.contact__form::after {
    min-height: 70rem;
    content: "";
}
}


    </style>
</head>

<body>

            <section class="contact__form">
                <div class="site__fix">
                    <div class="contact__left wow fadeInLeft">
                        <h2>Register </h2>
                        <div class="form">
                            <form action="/Register" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                                @csrf
                                <ul>
                                    <li>
                                        <div class="col__1">
                                            <label>Company Name<span>*</span></label><br>
                                            <input type="text" class="input" name="CName"" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col__1">
                                            <label>Email <span>*</span></label><br>
                                            <input type="text" class="input" name="Email" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col__2">
                                            <label>Image<span>*</span></label><br>
                                            <input type="file" class="input" name="image" accept="image/*"/>
                                        </div>
                                    </li>
                                   <li>
                                        <div class="col__1">
                                            <label>Password <span>*</span></label><br>
                                            <input type="Password" class="input" name="Password"/>
                                        </div>
                                    </li>
                                    
                                    <button class="btn" type="submit">Submit</button><br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <button class="btn"><a href="front">Back to Home</a></button><br>
                                  <a href="/login"><small>Already Registered?  Login</small></a>
                                </ul>
                            </form>
                        </div>
                    </div>
            
        </section>
</body>
</html>