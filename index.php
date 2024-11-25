<?php
include_once "header.php";
?>

<canvas id="stars" style="position: fixed; z-index: -1"></canvas>

<div class="container">
    <nav class="sidebar">
        <h2>Mathis Crochet</h2>
        <ul>
            <li><a href="#" class="btn"><i class="fa-solid fa-house"></i> Accueil</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-lightbulb"></i> Projets</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-building"></i> Expérience pro</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-school"></i> Expérience scolaire</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-tag"></i> Compétences</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-phone"></i> Me contacter</a></li>
            <li><a href="#" class="btn"><i class="fa-solid fa-download"></i> Télécharger mon CV</a></li>
        </ul>
    </nav>

    <main class="content">
        <div class="container" id="hero">
            <h1>Bienvenue sur mon portfolio :)</h1>
            <p>Administrateur Systèmes, Réseaux et Bases de données</p>
        </div>
        <div class="container" id="projects">
            <h2>Mes projets</h2>
        </div>
        <div class="container" id="pro">
            <h2>Mes expériences professionnelles</h2>
        </div>
        <div class="container" id="study">
            <h2>Mes expériences scolaires</h2>
        </div>
        <div class="container" id="skills">
            <h2>Mes compétences</h2>
            <div>
                <h3>Systèmes & Réseaux :</h3>
                <div class="skills-container">
                    <div>
                        <img src="images\skills\linux.png" alt="">
                        <p>Linux</p>
                        <span>Ubuntu, Debian, CentOS, Alpine</span>
                    </div>
                    <div>
                        <img src="images\skills\windows.png" alt="">
                        <p>Windows</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\ad.png" alt="">
                        <p>Active Directory</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\vmware.png" alt="">
                        <p>Virtualisation</p>
                        <span>ESXi, Workstation, Proxmox</span>
                    </div>
                    <div>
                        <img src="images\skills\docker.png" alt="">
                        <p>Conteneurisation</p>
                        <span>Docker (Compose, Swarm)</span>
                    </div>
                    <div>
                        <img src="images\skills\ansible.png" alt="">
                        <p>Ansible</p>
                        <span></span>
                    </div>
                </div>
                <h3>Bases de données :</h3>
                <div class="skills-container">
                    <div>
                        <img src="images\skills\postgresql.png" alt="">
                        <p>PostgreSQL</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\mariadb-mysql.png" alt="">
                        <p>MariaDB & MySQL</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\sqlserver.png" alt="">
                        <p>SQL Server</p>
                        <span></span>
                    </div>
                </div>
                <h3>Supervision</h3>
                <div class="skills-container">
                    <div>
                        <img src="images\skills\zabbix.png" alt="">
                        <p>Zabbix</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\grafana.png" alt="">
                        <p>Grafana</p>
                        <span></span>
                    </div>
                    <div>
                        <img src="images\skills\graylog.png" alt="">
                        <p>Graylog</p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="contact">
            <h2>Me contacter</h2>
            <div>
                <p>Par mail :</p>
                <a href="mailto:mathiscrochet@gmail.com">mathiscrochet@gmail.com</a>
                <ul>
                    <li><a href="https://www.linkedin.com/in/mathis-crochet" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/Astae444" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </main>
</div>

</body>
</html>
