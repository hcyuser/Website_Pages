<?php
if(empty($_SERVER["HTTPS"])) {
  $https_login = "https://" . $_SERVER["SERVER_NAME"] . '/intro' ;
  header("Location: $https_login");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CHIH-YANG HUANG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">CHIH-YANG HUANG</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#ContactModal">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    </style>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/sitcon2018.jpg" width="900" height: "400">
            <div class="carousel-caption">
              <h3>@Academia Sinica, Taipei, 2018</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/thai.jpg" width="900" height: "400">
            <div class="carousel-caption">
              <h3>@Amphawa Floating Market, Thailand, 2017</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/fkum.jpg" width="900" height: "400">
            <div class="carousel-caption">
              <h3>@Faculty of Engineering, University of Malaya, Malaysia, 2017</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/kmrt.jpg" width="900px" height: "400">
            <div class="carousel-caption">
              <h3>@Kaohsiung, Taiwan, 2016</h3>
            </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
<br>
<div class="container">
  <div class="row">
    <div class="card">
        <div class="card-header"><h3>CHIH-YANG HUANG (黃志揚)<a href="https://1drv.ms/b/s!Av124FbBx2WUoxbugrFpbsVeaPrD" class="btn btn-info" role="button">CV:Chinese Version</a></div></h3>
        <div class="card-body">
          <h5>
  				Student Chih-Yang Huang (黃志揚) received his STUDENT EXCHANGE PROGRAMME in <a href="http://www.fsktm.um.edu.my/">Computer Science and Information Engineering</a> at <a href="http://www.um.edu.my">University of Malaya</a> in 2016.
  				After joining the STUDENT EXCHANGE PROGRAMME, he continued to study in <a href="http://cs.utaipei.edu.tw">Computer Science</a> at <a href="http://www.utaipei.edu.tw/">University of Taipei</a>.
          </h5>
        </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Education & Training</h4></span>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Time</th>
        <th>Place</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2009-2012</td>
        <td><a href="http://blog.ilc.edu.tw/blog/blog/23237">County Suao Junior High School, Yilan, Taiwan</a></td>
      </tr>
      <tr>
        <td>2012-2015</td>
        <td><a href="http://www.ylsh.ilc.edu.tw">National Yilan Senior High School, Yilan, Taiwan</a></td>
      </tr>
      <tr>
        <td>2015-2016</td>
        <td><a href="http://www.utaipei.edu.tw">University of Taipei,Taipei, Taiwan</a></td>
      </tr>
      <tr>
        <td>2016-2017</td>
        <td><a href="http://www.um.edu.my/">University of Malaya, Kuala Lumpur, Malaysia</a></td>
      </tr>
      <tr>
        <td>July, 2017</td>
        <td><a href="http://www.stat.sinica.edu.tw">Summer School, Institute of Statistical Science, Academia Sinica, Taipei, Taiwan</a></td>
      </tr>
      <tr>
        <td>2017-now</td>
        <td><a href="http://www.utaipei.edu.tw">University of Taipei, Taipei, Taiwan</a></td>
      </tr>

    </tbody>
  </table>
</div>

<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Project & Publications</h4></span>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Items</th>
        <th>Position</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="https://github.com/hcyuser/Where-is-Taipei-Metro">Where is Taipei Metro,2015</a></td>
        <td>Project Manager & API Designer</td>
      </tr>
      <tr>
        <td><a href="https://github.com/hcyuser/2016-JAVA2">Utaipei Portal,2016</a></td>
        <td>Project Manager & API Designer</td>
      </tr>
      <tr>
        <td><a href="https://github.com/hcyuser/2016-Introduction_to_E-Learning">Introduction_to_E-Learning,2016</a></td>
        <td>Project Manager & Web Designer</td>
      </tr>
      <tr>
        <td>A Corpus Analysis of Representation of South-Asia Migrant Workers in Taiwan Newspaper,2016</td>
        <td><p>Author:<br>Chih-yang Huang(黃志揚), Chu-ying Kao(高竹瑩), I-chen Yeh(葉奕辰), Ho-shiuan Lin(林荷鍹)</p>
        <span class="label label-default">Conference Proceedings: </span><a href="https://1drv.ms/b/s!Av124FbBx2WUklk4MM_61f7V_j8X">[Poster]</a><a href="https://1drv.ms/b/s!Av124FbBx2WUklufKuFz1zKSYAlG">[Slides]</a>
        <p>In <a href="http://www.dadh.digital.ntu.edu.tw/">7th International Conference of Digital Archives and Digital Humanities</a>,National Taiwan University,Taipei(poster paper)</p></td>
      </tr>
      <tr>
        <td><a href="https://github.com/hcyuser/Utaipei_News">Utaipei Announce Beautify,2016</a></td>
        <td>Web Designer</td>
      </tr>
      <tr>
        <td><a href="https://github.com/hcyuser/CBR_Mobile_Utaipei/blob/master/Smart%20Phone%20App%20Programming.pdf">Hotel Searching based on CBR and deployed on Android,2017</a></td>
        <td>Designer</td>
      </tr>
      <tr>
        <td><a href="https://github.com/hcyuser/UT-CSSA_Finance_System">UTaipei CSSA Finance System,2017</a><span class="badge badge-secondary">Private</span></td>
        <td>Designer</td>
      </tr>
      <tr>
        <td><a href="https://sitcon.org/2018/">SITCON 2018</a></td>
        <td>Speaker</td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="card col-6">
      <div class="card-header">Volunteer Experience</div>
      <div class="card-body">
         <li><a href="http://kingcar.org.tw/">King Car Education Foundation</a>,2015,2017</li>
         <p>Teaching Assistant</p>
         <li><a href="http://www.wisland.org">世界公民島</a>,2015</li>
         <p>Administrative Assistant</p>
         <li><a href="https://hitcon.org">HITCON Community</a>,2016</li>
         <p>Administrative Assistant</p>
         <li><a href="http://www.tgdf.tw/">台北遊戲開發者論壇（Taipei Game Developers Forum)</a>,2016</li>
         <p>Administrative Assistant & Photographer </p>
      </div>
    </div>
    <div class="card col-6">
      <div class="card-header">Academic Experience</div>
      <div class="card-body">
        <li>Teaching Assistant,2017,2018</li>
        <p>Course: Computer Compendium <br/>Instructor: <a href="http://dhluserver.utaipei.edu.tw">Dong-Hwa Lu</a><br/>
          Department of Computer Science, University of Taipei, Taipei, Taiwan</p>
        <li>Temporary Research Assistant,2017,2018</li>
        <p>Project: 多模態英文閱讀--利用功能語法之後設語言增進國中生之產生與建構意義之能力(1/2)，科技部 (MOST 106-2633-H-003-001)&nbsp; <a href="https://1drv.ms/b/s!Av124FbBx2WUnzyEgp0QyQE2c3lQ">Contract</a><br/>
        Principal Investigator：<a href="http://www.eng.ntnu.edu.tw/members/bio.php?PID=198">Pei-Chin Chang</a><br/>Department of English, National Taiwan Normal University, Taipei, Taiwan</p>
        <li>Research Assistant,2018</li>
        <p>Project: 教學意見調查平台中學生評論的言談分析: 基於語料庫實證研究，科技部 (MOST)&nbsp; <a href="https://1drv.ms/b/s!Av124FbBx2WUpASj71RYA7J4Krjx">Contract</a><br/>
        Principal Investigator：<a href="http://163.21.236.197/~english/old_dat/teacher_int/Mei-ching-Ho.htm">Mei-Ching Ho</a><br/>Department of English Instruction, University of Taipei, Taipei, Taiwan</p>
     </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="card col-6">
        <div class="card-header">Awards</div>
        <div class="card-body">
          <li>Academic Achievement Award, University of Taipei,Taiwan,2015,2016,2017</li><br>
          <li><a href="http://service.utaipei.edu.tw/files/11-1023-59.php?Lang=zh-tw">Entrance Scholarship, University of Taipei,Taiwan,2015,2016,2017</a></li><br>
          <li>Literary Award,National Yilan Senior High School,Yilan,Taiwan,2013,2014</li><br>
          <li>Academic Achievement Award, National Yilan Senior High School,Yilan,Taiwan,2013,2014</li><br>
        </div>
      </div>
      <div class="card col-6">
        <div class="card-header">Certification</div>
        <div class="card-body">
          <li>初階行銷傳播認證,<a href="http://www.tmca.org.tw/">TMCA</a>, Taiwan Marcom Certification Association,2015</li><br>
          <li>TOEIC Score:685,ETS,2015</li><br>
          <li>The General English Proficiency Test Intermediate,<a href="https://www.lttc.ntu.edu.tw/E_LTTC/E_GEPT.htm">LTTC</a>,2015</li><br>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
            <span class="row justify-content-center align-self-center"><h4>Technology Skills</h4></span>
            <div id="chart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal fade" id="ContactModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <p>Email: user@hcy.idv.tw</p>
          <p>Telegram: <a href='https://t.me/hcyuser'>https://t.me/hcyuser</a></p>
          <p>Messenger: <a href='https://m.me/hcyuser'>https://m.me/hcyuser</a></p>
          <p>GitHub: <a href='https://github.com/hcyuser'>https://github.com/hcyuser</a></p>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


  <!-- Chart JS -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script type="text/javascript">

          // Make monochrome colors
          var pieColors = (function () {
              var colors = [],
                  base = Highcharts.getOptions().colors[0],i;

              for (i = 0; i < 12; i += 1) {
                  // Start out with a darkened base color (negative brighten), and end
                  // up with a much brighter color
                  colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
              }
              return colors;
          }());

          // Build the chart
          Highcharts.chart('chart', {
              chart: {
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false,
                  type: 'pie'
              },
              title: {
                  text: 'Tech Skills'
              },
              tooltip: {
                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
              },
              plotOptions: {
                  pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      colors: pieColors,
                      dataLabels: {
                          enabled: true,
                          format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                          distance: -50,
                          filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                          }
                      }
                  }
              },
              series: [{
                  name: 'Tech Skills',
                  data: [
                      { name: 'Java', y: 40 },
                      { name: 'C/C++', y: 35 },
                      { name: 'Shell Script', y: 30 },
                      { name: 'Matlab', y:15 },
                      { name: 'Python', y: 20 },
                      { name: 'R', y: 12 },
                      { name: 'Swift', y: 10 },
                      { name: 'JavaScript', y: 13 },
                      { name: 'PHP', y: 15 }
                  ]
              }]
          });
    </script>
</body>
</html>
