<?php

namespace App\model\Entity;

class Organization
{
    public $id = 1;
    public $name = "MVC";

    public $site = "<a href='https://joaogabrielsantosfranco.github.io/'>https://joaogabrielsantosfranco.github.io/</a>";

    public $description = '&nbsp O MVC é uma abordagem de desenvolvimento de software que divide um aplicativo em três componentes principais: Model, View e Controller. Cada um desses componentes desempenha um papel importante no aplicativo e é responsável por uma parte específica da funcionalidade.
    <br/>
    <br/>    
    &nbsp O Model é responsável por gerenciar os dados do aplicativo. Ele é responsável por interagir com o banco de dados e fornecer informações para o Controller e a View.
    <br/>
    <br/>
    &nbsp
        A View é responsável por apresentar os dados ao usuário. Ela é responsável pela interface do usuário e pela interação com o usuário.
    <br/>
    <br/>
    &nbsp
        Controller é responsável por gerenciar a lógica do aplicativo. Ele recebe solicitações do usuário, interage com o Model para obter os dados necessários e, em seguida, passa esses dados para a View para exibição.
';
}