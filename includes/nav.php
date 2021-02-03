<div id="navigation-container">
    <div id="navigation">
        <div id="logo">
            <a href="/"><img src="/assets/NordicLogoWhite.svg" alt=""></a>
        </div>
            <nav>
                <ul>
                    <li><a href="/coverage">DÆKNING</a></li>
                    <li><a href="/solutions">LØSNINGER</a></li>
                    <li><a href="/hardware">HARDWARE</a></li>
                    <li><a href="/nyheder">NYHEDER</a></li>
                    <li><a href="/omos">OM OS</a></li>
                    <li><a href="/kontakt">KONTAKT</a></li>
                    <div class="last">
					            <li><a class="loginBtn" href="https://optimaldrivingfleet.jaltest.com/Presentacion/Index.aspx">LOGIN</a></li>
                      <li><a class="demoBtn" href="/demo">BESTIL DEMO</a></li>
                    </div>
                </ul>
                <div id="mobilecontainer">
                    <a href="javascript:void(0);" class="menu-trigger" onclick="burger()"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
                    <div id="mobileNav">
                        <a href="/" class="first">FORSIDE</a>
                        <a href="/coverage">DÆKNING</a>
                        <a href="/solutions">LØSNINGER</a>
                        <a href="/hardware">HARDWARE</a>
                        <a href="/nyheder">NYHEDER</a>
                        <a href="/omos">OM OS</a>
                        <a href="/kontakt">KONTAKT</a>
                        <a href="https://optimaldrivingfleet.jaltest.com/Presentacion/Index.aspx">LOGIN</a>
                        <a href="/demo">BESTIL DEMO</a>
                    </div>
                </div>
            </nav>
    </div>
</div>

<script>
    // Mobile menu
    function burger() {
        var x = document.getElementById("mobileNav");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>