// AOS plugin init
AOS.init();

var titles = [
  'Equipo',
  'Salud y Bienestar',
  'Liderazgo',
  'Foundations',
  'Engagement',
  'Cultura del Cambio',
  'Capital humano',
  'Gobernanza',
  'Eficiencia y agilidad'
];

var questIDs = ["GjZDxIWoitHN", "vHMsURMZG6OH", "jYrB63LOG14O", "Br4ZYLekorFP", "Xhv6eCVDoz72", "wMJmJyPzmQYq", "Q9Opyui1HYXS", "BiNDYgL6pijY", "RQcikfxqnZAM", "hc3VAxHesd6e", "QbWdWlaB6WiB", "oAFijsOTsBSB", "Vsnk5SUFoes6", "qh2xtO25fFcY", "CTq9eh0oGTUS", "A6ng25Gj39Bb", "aeWEGlBHNDMS", "kfQpbN5VbBsy", "shitJPiYNY5u", "H4r9pNIb6nEw", "KhhCWMwoK6jG", "ET5HUcq3sMZL", "n9PZvY4rVe99", "rCIV2QLNt7zc", "hDzFIlUxCBi9", "hTcrVpRYPUfk", "aqmD7IzJfLQf"];

//var colors = ['rgba(132,191,136, 0.3)', 'rgba(255, 241, 175, 0.3)', 'rgba(248, 170, 143, 0.3)'];
//var colors = [chartContext.createPattern(patternCanvas, 'repeat'), 'rgba(255, 241, 175, 0.3)', 'rgba(248, 170, 143, 0.3)'];

var m3qData = [],
    m3qData9 = [],
    pointsColors = [],
    percentages = [],
    answers = [],
    textObject = [],
    labels = [],
    exData = [100,30,80,50,10,80,60,40,20],
    exResponses = [3,3,3,1,1,1,2,2,2,0,0,0,1,2,3,1,1,3,2,2,3,1,1,2,2,2,1];

var $lgStrong = $(".legend-strong"),
    $lgMed = $(".legend-med"),
    $lgLow = $(".legend-low"),
    $lgZero = $(".legend-zero");

var svgItems = ["#equipo","#saludbenestar","#liderazgo","#foundations","#engagement","#culturacambio","#capitalhumano","#gobernanza","#eficiencia"]

function colorPath(el,value) {
    if( value == 3 ){
        $(el).find("#tre, #due, #uno").css('fill', '#8EBE82');
    } else if( value == 2 ){
        $(el).find("#due, #uno").css('fill', '#FFF1B4');
    }  else if( value == 1 ){
        $(el).find("#uno").css('fill', '#F6AF95');
    }
}

function textsForAnswers(index, answer, texts) {
  var copyWriting = 'p' + index + 'r' + answer;
  var tag = 'p' + index ;
  // console.log(tag);
  // console.log(copyWriting);
  var elTag = tag.toString();

  $(document).ready(function(){
    document.getElementById(elTag).innerHTML = texts[copyWriting]
  });

  };

  function userNameText(userName, userCompany) {
    $(document).ready(function(){
      document.getElementById('user_name_text').innerHTML = `${userName} - ${userCompany}`;
    })
  }



function assignColor(value) {
  var color;
  if( value == 3 ){
    color = 'green';
  } else if( value == 2 ){
    color = 'yellow';
  }  else if( value == 1 ){
    color = 'red';
  }
  return color;
}

var chartSize;
var orChartSize = 546;
function resizeChart(array) {
    winW = $(window).width();
    if(winW > 1023){
      chartSize = parseInt(winW)*0.60;
    } else {
      chartSize = parseInt(winW)*0.94;
    }
    $('#chart').width(chartSize);
    $('#chart').height(chartSize);
    $('#chart').css('visibility', 'visible');
}
resizeChart();

function extractValues(array) {
  for(i=0; i<array.length; i++){
    array[i] = parseInt(array[i].split('.')[0]);
  }
  //console.log(array);
  return array;
}

function mainChart(array) {
    // Get avarage percentage values
    for( i=0, b=0; i<array.length; i+=3, b++){
        m3qData[b] = Math.round( (array[i]+array[i+1]+array[i+2])/3 );
        m3qData9[b] = array[i]+array[i+1]+array[i+2];
        //console.log(m3qData[b] + " " + m3qData9[b]);
    }
    //console.log(m3qData);

    for( i=0; i<svgItems.length; i++){
        colorPath(svgItems[i], m3qData[i]);
    }
}

function singleCharts(array) {
    var wBar, elColor;

    // Transform answers in percentage values
    for( i=0; i<array.length; i++) {
        wBar = array[i]*33.33;
        elColor = assignColor(array[i]);
        //console.log(wBar + " " + elColor);
        $('.result-value[data-answer="'+(i+1)+'"]').find('.bar').addClass(elColor).width(wBar+"%");
        //$('.result-value[data-answer="'+(i+1)+'"]').attr("title",wBar);
        // console.log(labels[i]);
        // $('.result-value[data-answer="'+(i+1)+'"]').prev('p').html(labels[i]);
        // console.log($('.result-value[data-answer="'+(i+1)+'"]').prev('h3').html());
        //console.log($('.result-value[data-answer="'+(i+1)+'"]').prev('h3'));

    }


    // Transform answers in percentage values
    //console.log(m3qData);
    for( n=0; n<m3qData.length; n++) {
        wBar = m3qData9[n]*11.11;
        elColor = assignColor(m3qData[n]);
        $('.result-value[data-groupaverage="'+(n+1)+'"]').find('.bar').addClass(elColor).width(wBar+"%");
        //$('.result-value[data-groupaverage="'+(n+1)+'"]').attr("title",wBar+"%");

        if(elColor == "green") {
            $lgStrong.append("<span>" + titles[n] + "</span> ");
            //console.log(titles[n]);
        } else if(elColor == "yellow") {
            $lgMed.append("<span>" + titles[n] + "</span> ");
        } else if(elColor == "red") {
            $lgLow.append("<span>" + titles[n] + "</span> ");
        } else  {
            $lgZero.append("<span>" + titles[n] + "</span> ");
        }
    }

    //$('[data-toggle="tooltip"]').tooltip();

}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function getSubmission(uuid, key) {
  var form_id = "fepjH3"; // Current main form id, change for each type

  const url = 'https://m3q-server.herokuapp.com/';
  const urlDev = 'http://localhost:5000/';
  // This request will fetch the answers associated to that email address
  $.ajax({
      url: url + "results?uuid=" + uuid + "&key=" + key,
      method: "GET",
      headers: {"Access-Control-Allow-Origin": "*"},
      success: function(response) {
          // Parsing JSON for answer values by ID
        answers = response;
        // console.log(answers);

        // Esta alerta ayuda a que las respuestas aparezcan correctamente en la página. Si se cambia el número de preguntas es importante atualizarla. 
        if(answers.length = 27) {
          mainChart(answers);
          singleCharts(answers);
          callB(uuid, key);
          alert('Tus respuestas fueron cargadas correctamente. Cierra esta alerta y baja en la página para ver tus resultados.');
        } else {
          alert('Tus respuestas no pudieron ser cargadas. Inténtalo de nuevo, por favor.')
        }
      }
  });


}
function callB(uuid, key) {
  const url = 'https://m3q-server.herokuapp.com/';
  const urlDev = 'http://localhost:5000/';
  $.ajax({
    url: url + "texts?uuid="+ uuid + "&key=" + key,
    method: "GET",
    headers: {"Access-Control-Allow-Origin": "*"},
    success: function(response) {
        // Parsing JSON for answer values by ID
      textsObject = response.responseTexts;
      // console.log(textsObject);
      for (i = 0; i < answers.length; i++) {
        textsForAnswers(i+1, answers[i], textsObject)
        }
      const userName = response.userName;
      const userCompanyName = response.userCompanyName;
      userNameText(userName, userCompanyName);

    }
  });
}



var userUuid = getParameterByName('uuid');
var userEmail = getParameterByName('email')
var key = getParameterByName('key');

if(userUuid && key){
    getSubmission(userUuid, key);
}



// PDF variables
var element = document.getElementById('m3q');
var opt = {
  margin:       [0,0.5,0,0.5],
  pagebreak:    { mode: ['legacy'] },
  filename:     'm3q_report-'+userEmail+'.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 1 },
  jsPDF:        { unit: 'in', orientation: 'landscape', compressPDF: true }
};

function createPDF(){
  $('body').addClass('printpdf');
  $('#chart').width(orChartSize);
  $('#chart').height(orChartSize);

  // New Promise-based usage:
  html2pdf().set(opt).from(element).save().then(function(pdf){
    resizeChart();
    $('body').removeClass('printpdf');
  });;
}

$('#pdf-creatiion').click(function(){
  //console.log('test');
  createPDF();
})

function sendPDF(){
  $('body').addClass('printpdf');
  $('#chart').width(orChartSize);
  $('#chart').height(orChartSize);

  html2pdf().set(opt).from(element).toPdf().output('datauri').then(function (pdfAsString) {
    // The PDF has been converted to a Data URI string and passed to this function.
    // Use pdfAsString however you like (send as email, etc)! For instance:
    //console.log(pdfAsString);

    var $button = $('#pdf-mail');
    $.ajax({
        type: 'POST',
        url: "sendemail.php",
        data: {
            //Name: $("#name").val(),
            Email: userEmail,
            //Message: $("#message").val(),
            Attachment: pdfAsString
        }
    }).done(function(data) {
        $button.html('Email Sent!').delay(3210);
        resizeChart();
        $('body').removeClass('printpdf');
    });

  });

}

$('#pdf-mail').click(function(){
  sendPDF();
})
