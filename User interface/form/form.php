<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/home.css">

<style>
    
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    margin: -20px 0 50px;
    max-height: 47rem;
}

h1 {
    font-weight: bold;
    margin: 0;
    color: #FFFFFF;
}

h2 {
    text-align: center;
    color: #FFFFFF;
}

p {
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
    color: #FFFFFF;
}

span {
    font-size: 12px;
    color: #FFFFFF;
}

a {
    color: #CCCCCC;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: none;
    background-color: #ff4444;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background-color: transparent;
    border: 1px solid #FFFFFF;
    color: #FFFFFF;
    transition: 0.5s;
}

button.ghost:hover {
    background-color: #FFFFFF;
    color: #212121;
    cursor: pointer;
}

form {
    background-color: #212121;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #333333;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    color: #FFFFFF;
}

.container {
    background-color: #333;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.log-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.container.right-panel-active .log-in-container {
    transform: translateX(100%);
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {

    0%,
    49.99% {
        opacity: 0;
        z-index: 1;
    }

    50%,
    100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

.overlay {
    background: #ff4444;
    background: linear-gradient(142.18deg, #ff4444 0%, #ff7e7e 98.85%);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #CCCCCC;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

</style>




<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../form/create_account.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/dvrkskin" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/hmed.wav" target="_blank" class="social"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input name="name" type="text" placeholder="Name" required />
                <input name="email" type="email" placeholder="Email" required/>
                <input name="password" type="password" placeholder="Password" required/>
                <button name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container log-in-container">
            <form action="../form/login.php" method="POST">
                <h1>Log in</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/dvrkskin" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/hmed.wav" target="_blank" class="social"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>or use your account</span>
                <input name="email" type="email" placeholder="Email" required/>
                <input name="password" type="password" placeholder="Password" required />
                <a href="#">Forgot your password?</a>
                <button>Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Already have an account? Log In</p>
                    <button class="ghost" id="logIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, There!</h1>
                    <p>Don't have an account? Sign Up Free</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('logIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

logInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
    </script>


