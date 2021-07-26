# Noticias
 
Projeto web de um site de notícias, com um módulo para os administradores fazerem o gerenciamento das postagens e demais informações, e módulo para o público vizualizar todas as postagens. 

<h3>Requisitos:</h3>
    <blockquote>
       Ter o composer instalado <br>
       Algum servidor (xampp, server do php ou algum de sua preferência)
    </blockquote>

<h3>Instalação: </h3>
<blockquote>
    clonar este repositório para um diretório de sua preferência e executar em um servidor. <br>
    O software conta com módulos: backend e frontend. Para utilizar no xampp ou semelhantes é necessário definir o virtual host para esses dois módulos, pode ser feito da segunda forma: <br>
</blockquote>
    <ul>
      <li>Navegar até o diretório <code>C:\xampp\apache\conf\extra</code></li>
      <li>Abrir o arquivo <code>httpd-vhosts.conf</code> e adicionar as seguintes informações: </li>
      <code>
        < VirtualHost *:80 >
            ServerName noticias.localhost
            DocumentRoot "C:\xampp\htdocs\Noticias\frontend\web"
            
            <Directory "C:\xampp\htdocs\Noticias\frontend\web">
                # use mod_rewrite for pretty URL support
                RewriteEngine on
                # If a directory or a file exists, use the request directly
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteCond %{REQUEST_FILENAME} !-d
                # Otherwise forward the request to index.php
                RewriteRule . index.php

                # use index.php as index file
                DirectoryIndex index.php

                # ...other settings...
            </Directory>
        < /VirtualHost >
       
      </code>

      <code>
        < VirtualHost *:80 >
            ServerName noticias.localhost
            DocumentRoot "C:\xampp\htdocs\Noticias\backend\web"
            
            <Directory "C:\xampp\htdocs\Noticias\backend\web">
                # use mod_rewrite for pretty URL support
                RewriteEngine on
                # If a directory or a file exists, use the request directly
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteCond %{REQUEST_FILENAME} !-d
                # Otherwise forward the request to index.php
                RewriteRule . index.php

                # use index.php as index file
                DirectoryIndex index.php

                # ...other settings...
            </Directory>
        < /VirtualHost >
      </code>
      
    </ul>

