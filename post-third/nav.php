<nav class="navbar navbar-expand-lg mt-0 mb-0">
    <a class="navbar-brand" href="/index.php"><h5 style="font-family: 'Satisfy', cursive;">La Coffee</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <div>
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
                </label>
            </div>
        </ul>
    </div>
</nav>

<script>    
    const checkbox = document.getElementById('checkbox');
        checkbox.addEventListener('change' , () => {
        document.body.classList.toggle('dark');
    });
</script>

<style>
.label{
    background-color: #111;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
    position: relative;
    border-radius: 50px;
    height: 26px;
    weight: 50px;
}
.ball{
    background-color: #fff;
    position: absolute;
    border-radius: 50%;
    top: px;
    left: 2px;
    height: 26px;
    width: 26px;
    transition: 0.2s linear;
}
.checkbox{
    opacity: 0;
    position: absolute;
}
.checkbox:checked + .label .ball {
    transform: translateX(38px);
}
.fas{
    padding: 5px;
}
.fa-moon{
    color: #f1c40f;
}
.fa-sun{
    color: #f39c12;
}
/**/
.navbar a {
    color: black;   
}
.navbar a:hover {
    color: #808080; 
}
body.dark {
    background-color: #505050; 
}
body.dark .row{
    background-color: #888888;
}
body.dark .container{
    background-color: #A8A8A8;
}
body.dark .card{
    background-color: 	#787878;
}
body.dark .navbar{
    background-color: #E0E0E0;
}
.dark p{
    color: #fff;
}
.dark h1{
    color: #fff;
}
body.dark #hov{
    background-color: #A9A9A9;
}
.navbar{
  /*  position: fixed;*/
}
</style>