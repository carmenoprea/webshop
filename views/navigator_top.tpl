<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Logo</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#prijzen">PRIJZEN</a></li>
                <li><a href="/orders">BESTELLINGEN</a></li>
                <li><a href="#PRODUCTS">PRODUCTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
                {if $isLoggedIn}
                    <li><a href="/employees">LIJST WERKNEMERS</a></li>
                    <li><a href="/logout">LOGOUT</a></li>
                {/if}
            </ul>
        </div>
    </div>
</nav>
