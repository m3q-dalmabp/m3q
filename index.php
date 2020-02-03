<!doctype html>
<html lang="">

<?php

require 'sendemail.php';

?>


<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Matrix Maturity Model Questionnaire - D'alma</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="styles/main.css">
</head>

<body id="m3q">
  <header class="container clearfix">
    <div class="header-title text-center">Matrix Maturity Model Questionnaire</div>
    <div class="logo float-left">
      <img src="images/logo_m3q.svg">
    </div>
    <div class="header-text float-right">
      <h2>Informe de resultados</h2>
      <p>A continuación, los resultados de tu M3Q.</p>
      <p><strong>Gráfico circular:</strong> evaluación global. Conoce cuáles son las fortalezas, las áreas en desarrollo y las oportunidades de la situación actual de tu organización.</p>
      <p><strong>Gráficas horizontales:</strong> informe al detalle. Descubre cómo es la situación en cada una de las áreas y sus niveles de desarrollo.</p>
    </div>
  </header>

  <div class="container main-chart">

    <div class="main-chart-wrapper">
      <div class="main-chart-container">
        <canvas id="mainchart"></canvas>
      </div>
    </div>

    <div class="legend-wrapper">
      <div class="legend">
        <img src="images/legend.svg">
      </div>
      <div class="legend-desc">
        <p class="legend-strong"><strong>Áreas de fortaleza</strong> </p>
        <p class="legend-med"><strong>Áreas en desarrollo</strong> </p>
        <p class="legend-low"><strong>Áreas de oportunidad</strong> </p>
      </div>
    </div>
  </div>

  <div class="single-charts container">
    <h1>Dimensión Personas</h1>
    <div class="answer-group" data-group="1">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Área Equipos</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Los equipos son interdependientes. La confianza, la comunicación y la colaboración representan los 3 pilares en que se basan para obtener un alto rendimiento en los proyectos.</p>
          <p>Los equipos se construyen y evolucionan desde la diversidad complementaria (miradas diferentes, formas de tratar la información, generar nuevos aprendizajes...) y cuando surgen conflictos relacionados con ellos son capaces de solucionarlos.</p>
          <p>La organización conoce cuál es el valor añadido que aportan los colaboradores al proyecto más allá de su experiencia y conocimientos técnicos y qué habilidades son necesarias para alcanzar los resultados deseados.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Aportación de valor</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="3">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Diversidad complementaria</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="2">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Nivel Equipos de alto rendimiento</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="1">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Equipos</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="1">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="answer-group" data-group="2">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Salud y bienestar</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Se cuenta con un programa interno (con proveedores internos / externos) cuyo objetivo es fomentar una empresa saludable todo el año.</p>
          <p>Se realizan acciones enfocadas a mejorar la salud y gestionar el estrés de forma regular.</p>
          <p>El cuidado de la salud y el bienestar de las personas son muy importantes en la empresa. Se cuenta con programas que ayudan a medir y evaluar cómo se encuentran de manera periódica.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Clima</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="6">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Cultura saludable</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="5">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Compañía saludable</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="4">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Salud y bienestar</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="2">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="answer-group" data-group="3">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Liderazgo</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Los managers de la organización adoptan un enfoque de coaching y son excelentes modelos a seguir. Potencian la autonomía, la colaboración y el aprendizaje. Esta actividad forma parte fundamental de su trabajo como líderes.</p>
          <p>Se cuenta con programas de formación, protocolos y manuales para el desarrollo de los managers.</p>
          <p>Se tiene definido cuál es el estilo de liderazgo que se quiere fomentar en la empresa. Se conocen cuáles son las conductas, comportamientos y habilidades que deben tener los líderes dentro de la organización.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Modelo de liderazgo</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="9">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Desarrollo de líderes</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="8">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Liderazgo consciente</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="7">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Liderazgo</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="3">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <h1>Dimensión Cultura</h1>
    <div class="answer-group" data-group="4">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Fundations</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Se realizan acciones y programas orientadas a que la gente viva los valores y cultura de la empresa de forma regular, fomentando así las conductas esperadas en los equipos.</p>
          <p>La cultura que se ha definido y que impregna todos los planes de estrategia, está recogida en un manual y puesto a disposición de los colaboradores.</p>
          <p>Se ha definido la misión, visión y valores de la compañía y es el norte (la orientación, la dirección) que se comparte con los equipos.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Misión, Visión y Valores</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="12">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Culture book</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="11">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Casa de la cultura</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="10">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Fundations</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="4">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="answer-group" data-group="5">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Atracción de talento</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Se dispone de un plan específico para posicionarse como un "Best Place to Work".</p>
          <p>Se dispone de herramientas que permiten identificar los niveles de confianza, relación, inteligencia emocional de los colaboradores (con mayor énfasis en los líderes), y llevar a cabo acciones en las áreas de mejora diagnosticadas.</p>
          <p>Se contempla cómo medir el grado de satisfacción y de engagement con el proyecto por parte de los colaboradores.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Engagement</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="15">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Desarrollo del talento</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="14">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Best place to work</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="13">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Atracción de talento</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="5">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="answer-group" data-group="6">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Change Management</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Existe un programa dedicado a la innovación. Los empleados dedican o pueden dedicar un % de su tiempo en pensar sobre innovación.</p>
          <p>Se han identificado, formado y preparado las personas que tienen que ser motores de cambio junto con modelos de gestión que permiten estructurar y facilitar este tipo de proyectos.</p>
          <p>Cuando se detecta la necesidad de impulsar un cambio dentro de la organización (gestión, producto, procesos...) se sabe qué hacer o se tienen los medios para poder dar una respuesta.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Change path</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="18">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Change management office</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="17">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Cultura del cambio</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="16">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Change Management</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="6">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <h1>Dimensión Procesos</h1>
    <div class="answer-group" data-group="7">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Capital humano</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>Se dispone de un modelo de desarrollo de competencias/valores (mapa de competencias, plan de formación y capacitación de nuestros colaboradores) que se enlaza con otras políticas de gestión de personas: plan de incentivos, objetivos, habilidaddes, promoción...).</p>
          <p>Existe un departamento de gestión de personas que está organizado, con los procedimientos establecidos y que es reconocido como un pilar estratégico en la organización para alcanzar las metas y objetivos.</p>
          <p>Se contempla un plan de staffing que da soporte a las futuras necesidades de la compañía con una correcta definición de puestos, roles y responsabilidades.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Staffing plan</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="21">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>People management plan</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="20">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>People development plan</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="19">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Capital humano</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="7">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="answer-group" data-group="8">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Governancia</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>e cuenta con un mapa de políticas de gestión estructurado para los procesos de crecimiento y desarrollo del personal (evaluación del desempeño, promoción, modelo de retención...).</p>
          <p>Se cuenta con un modelo de toma de decisiones aclarando responsabilidades de cada uno, y con procesos de: reunión, comunicación, transparencia, compliance...</p>
          <p>Se ha definido un organigrama con los principales roles, y existen protocolos/modelos/procedimientos de interacción / relación (Comunicación, transparencia en la información, reuniones, proyectos,..).</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Organigrama</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="24">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Modelo de toma de decisiones</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="23">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Process development plan</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="22">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Governancia</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="8">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="answer-group" data-group="9">
      <div class="row">
        <h2 class="answer-group--title col-md-4 text-center">Eficiencia y agilidad</h2>
      </div>
      <div class="row">
        <aside class="answer-group--desc col-md-3">
          <p>La mejora continua y la adaptación rápida y eficaz al cambio es la base de la filosofía de la empresa. Es un referente en ello, se actúa desde la proactividad.</p>
          <p>Hay capacidad para dar agilidad y eficiencia a cualquier reto que se prepare. Se cuenta con metodologías en los procesos que ayudan a tomar decisiones rápidamente y poder cumplir plazos relevantes (propuesta a clientes, respuesta de atención al cliente...).</p>
          <p>Se contemplan los indicadores en los procesos para medir su eficiencia (OKR definidos, KPI) y alcanzar los objetivos.</p>
        </aside>
        <ul class="col-md-9 results-list">
          <li>
            <h3>Dashboard</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="27">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Métodos ágiles de respuesta</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="26">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3>Proactividad</h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-answer="25">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
          <li>
            <h3><em>Promedio del área<br> Eficiencia y agilidad</em></h3>
            <div class="result-value" data-toggle="tooltip" data-placement="top" data-aos="custom-an" data-groupaverage="9">
              <span class="bar"></span>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-logo">
      <img src="images/logo_dalma.svg">
      <a href="http://www.dalmabp.com">www.dalmabp.com</a>
    </div>
  </footer>



  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <!-- <script src="scripts/chartjs-plugin-datalabels.min.js"></script> -->
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <!-- build:js scripts/plugins.js -->
  <!-- <script src="/bower_components/bootstrap/js/dist/util.js"></script>
    <script src="/bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="/bower_components/bootstrap/js/dist/button.js"></script>
    <script src="/bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="/bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="/bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="/bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="/bower_components/bootstrap/js/dist/scrollspy.js"></script>
    <script src="/bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="/bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="/bower_components/bootstrap/js/dist/popover.js"></script> -->
  <!-- endbuild -->
  <script src="scripts/bootstrap.bundle.min.js"></script>
  <!-- <script src="scripts/chart.js"></script> -->
  <script src="scripts/chart.min.js"></script>
  <!-- <script src="scripts/utils.js"></script> -->
  <script src="scripts/aos.js"></script>
  <script src="scripts/html2pdf.bundle.min.js"></script>
  <script src="scripts/main.js"></script>
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
  (function(b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
      function() {
        (b[l].q = b[l].q || []).push(arguments)
      });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = 'https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));
  ga('create', 'UA-UA-126205270-1');
  ga('send', 'pageview');
  </script>
</body>

</html>
