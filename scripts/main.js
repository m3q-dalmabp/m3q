// This script updates the information on the M3Q Results page

// Animate On Scroll plugin init 
AOS.init();

// This array corresponds with the tags that are evaluated (This is used on the labels chart that categorizes each area)
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

// This array corresponds with the ID for the values of each response
var questIDs = ["GjZDxIWoitHN", "vHMsURMZG6OH", "jYrB63LOG14O", "Br4ZYLekorFP", "Xhv6eCVDoz72", "wMJmJyPzmQYq", "Q9Opyui1HYXS", "BiNDYgL6pijY", "RQcikfxqnZAM", "hc3VAxHesd6e", "QbWdWlaB6WiB", "oAFijsOTsBSB", "Vsnk5SUFoes6", "qh2xtO25fFcY", "CTq9eh0oGTUS", "A6ng25Gj39Bb", "aeWEGlBHNDMS", "kfQpbN5VbBsy", "shitJPiYNY5u", "H4r9pNIb6nEw", "KhhCWMwoK6jG", "ET5HUcq3sMZL", "n9PZvY4rVe99", "rCIV2QLNt7zc", "hDzFIlUxCBi9", "hTcrVpRYPUfk", "aqmD7IzJfLQf"];

// Declaring variables for the arrays used
var m3qData = [],
    m3qData9 = [],
    pointsColors = [],
    answers = [],
    textObject = [],

// This is for Jquey Manipulation of the text labels
var $lgStrong = $(".legend-strong"),
    $lgMed = $(".legend-med"),
    $lgLow = $(".legend-low"),
    $lgZero = $(".legend-zero");

// This array corresponds with the tags on the SVG for the main (circular) graph
var svgItems = ["#equipo","#saludbenestar","#liderazgo","#foundations","#engagement","#culturacambio","#capitalhumano","#gobernanza","#eficiencia"]

// This function changes the colors of the figures labeled #tre, #due and #uno inside the ciruclar SVG based on values of answers
function colorPath(el,value) {
    if( value == 3 ){
        $(el).find("#tre, #due, #uno").css('fill', '#8EBE82');
    } else if( value == 2 ){
        $(el).find("#due, #uno").css('fill', '#FFF1B4');
    }  else if( value == 1 ){
        $(el).find("#uno").css('fill', '#F6AF95');
    }
}

// This function assigns texts to the P tags, based on their ID and the user's answer
function textsForAnswers(index, answer, texts) {
  var copyWriting = 'p' + index + 'r' + answer;
  var tag = 'p' + index ;
  var elTag = tag.toString();

  $(document).ready(function(){
    document.getElementById(elTag).innerHTML = texts[copyWriting]
  });

  };

  // This function adds the users name and company to the corresponding tag on the html
  function userNameText(userName, userCompany) {
    $(document).ready(function(){
      document.getElementById('user_name_text').innerHTML = `${userName} - ${userCompany}`;
    })
  }


// This function assigns colors based on a numeric value (1,2,3)
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

// This vars are used for the PDF print

var chartSize;

var orChartSize = 546;

// This function resizes the main chart based on the window width and is also used for the PDF Print
function resizeChart() {
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
// Calling resize main chart function
resizeChart();

// This fuction controls the main chart and 
function mainChart(array) {
    // Loop for getting avarage percentage values
    for(i=0, b=0; i<array.length; i+=3, b++){
        m3qData[b] = Math.round( (array[i]+array[i+1]+array[i+2])/3 );
        m3qData9[b] = array[i]+array[i+1]+array[i+2];
    }
    // Loop for assigining colors with colorPath function to the main graphs figures
    for(i=0; i<svgItems.length; i++){
        colorPath(svgItems[i], m3qData[i]);
    }
}

// This function colors the single charts and each area
function singleCharts(array) {
    var wBar, elColor;

    // Transforming answers in percentage values for single charts and coloring them
    for( i=0; i<array.length; i++) {
        wBar = array[i]*33.33;
        elColor = assignColor(array[i]);
        $('.result-value[data-answer="'+(i+1)+'"]').find('.bar').addClass(elColor).width(wBar+"%");
    }

    // Transforming answers in percentage values for average(area) charts and coloring them
    for( n=0; n<m3qData.length; n++) {
        wBar = m3qData9[n]*11.11;
        elColor = assignColor(m3qData[n]);
        $('.result-value[data-groupaverage="'+(n+1)+'"]').find('.bar').addClass(elColor).width(wBar+"%");

    // This conditional logic adds the area labels to the table that shows Strong - Medium - Low and Not Contamplated areas
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


}

// This fuction gets the users data from the URL
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// This function calls the API and gets the results for the user based on the params given as arguments
function getSubmission(uuid, key) {

  const url = 'https://m3q-server.herokuapp.com/';
  // const urlDev = 'http://localhost:5000/';
  // This request will fetch the answers associated to that email address
  $.ajax({
      url: url + "results?uuid=" + uuid + "&key=" + key,
      method: "GET",
      headers: {"Access-Control-Allow-Origin": "*"},
      success: function(response) {
          // Parsing JSON for answer values by ID
        answers = response;
        // console.log(answers);

        if(answers.length = 27) {
          // Calling mainChart and singleChart functions with the acquired answers.
          mainChart(answers);
          singleCharts(answers);
          // Calling the second API call (texts) function
          getTexts(uuid, key);
          // This alerts forces the page to load the colopaths, texts and such. Length should be updated if more questions are added
          alert('Tus respuestas fueron cargadas correctamente. Cierra esta alerta y baja en la página para ver tus resultados.');
        } else {
          alert('Tus respuestas no pudieron ser cargadas. Inténtalo de nuevo, por favor.')
        }
      }
  });

}

// This function calls the API and receives, the texts for each answer, as well as the users name and company
function getTexts(uuid, key) {
  const url = 'https://m3q-server.herokuapp.com/';
  // const urlDev = 'http://localhost:5000/';
  $.ajax({
    url: url + "texts?uuid="+ uuid + "&key=" + key,
    method: "GET",
    headers: {"Access-Control-Allow-Origin": "*"},
    success: function(response) {
      textsObject = response.responseTexts;

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



// PDF variables for PDF Creation
var element = document.getElementById('m3q');
var opt = {
  margin:       [0,0.5,0,0.5],
  pagebreak:    { before: ['#chart', '.answer-group', '#short-table', '.dimension-title'], after: ['#short-table', '.answer-group'] },
  filename:     'm3q_report-'+userEmail+'.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 1 },
  jsPDF:        { unit: 'in', orientation: 'landscape', compressPDF: true }
};

// This function creates a PDF file from the Results HTML
function createPDF(){
  $('body').addClass('printpdf');
  $('#chart').width(orChartSize);
  $('#chart').height(orChartSize);

  html2pdf().set(opt).from(element).save().then(function(pdf){
    resizeChart();
    $('body').removeClass('printpdf');
  });;
}

// Jquery onClick for the PDF Creation Button
$('#pdf-creatiion').click(function(){
  createPDF();
})