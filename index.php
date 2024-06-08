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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {

            if( navigator.userAgent.match(/Android/i)
                || navigator.userAgent.match(/webOS/i)
                || navigator.userAgent.match(/iPhone/i)
                || navigator.userAgent.match(/iPod/i)
                || navigator.userAgent.match(/BlackBerry/i)
                || navigator.userAgent.match(/Windows Phone/i)
              ){

                    $('#WE').DataTable({
                      paging:false,
                      searching:false,
                      info:false,
                      columnDefs: [
                           {
                               "targets": [2],
                               "visible": false,
                           }
                       ]
                    });
                    $('#ET').DataTable({
                      paging:false,
                      searching:false,
                      info:false
                    });
                    $('#PP').DataTable({
                      paging:false,
                      searching:false,
                      info:false,
                      columnDefs: [
                           {
                               "targets": [0],
                               "visible": false,
                           },
                           {
                               "targets": [ 1 ],
                               "visible": false
                           },
                           {
                               "targets": [ 4 ],
                               "visible": false
                           }
                       ]
                    });
                    $('#AE').DataTable({
                      paging:false,
                      searching:false,
                      info:false,
                      columnDefs: [
                           {
                               "targets": [ 0 ],
                               "visible": false,
                           },
                           {
                               "targets": [ 1 ],
                               "visible": false
                           },
                           {
                               "targets": [ 4 ],
                               "visible": false
                           },
                           {
                               "targets": [ 5 ],
                               "visible": false
                           },
                           {
                               "targets": [ 6 ],
                               "visible": false
                           }
                       ]
                    });
              }
                else {

                      $('#WE').DataTable({
                        paging:false,
                        searching:false,
                        info:false
                      });
                      $('#ET').DataTable({
                        paging:false,
                        searching:false,
                        info:false
                      });
                      $('#PP').DataTable({
                        paging:false,
                        searching:false,
                        info:false
                      });
                      $('#AE').DataTable({
                        paging:false,
                        searching:false,
                        info:false
                      });
              }



        } );


  </script>
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
          <a class="nav-link" href="#WE">Work Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ET">Education & Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#PP">Project & Publications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#AE">Academic Experience</a>
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
    <div id="demo" class="carousel slide">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/eecsntu.jpg" width="1100" height="400">
            <div class="carousel-caption">
              <h3>@EECS, NTU, Taipei, 2021</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/qingtiangang.jpg" width="1100" height="400">
            <div class="carousel-caption">
              <h3>@Qingtiangang, Taipei, 2020</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/sitcon2018.jpg" width="1100" height="400">
            <div class="carousel-caption">
              <h3>@Academia Sinica, Taipei, 2018</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/fkum.jpg" width="1100" height="400">
            <div class="carousel-caption">
              <h3>@Faculty of Engineering, University of Malaya, Malaysia, 2017</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="./images/kmrt.jpg" width="1100px" height='400'>
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
        <div class="card-header text-center"><h4>CHIH-YANG HUANG (黃志揚)<a href="./CV.pdf" class="btn btn-info" role="button">Download CV</a></div></h4>
        <div class="card-body">
          <p>
            <h5>
              I have been serving as a senior software engineer at <b><a href="https://www.appier.com/">Appier Inc</a></b> in <b>Nikkei 500</b> Stock Average list since 2024.
              <br>
              I worked as an <b>advanced software engineer</b> at <b><a href="https://www.novatek.com.tw">Novatek Microelectronics Corp</a></b> (the top <b>6</b> IC fabless design houses in the <b>world</b>) from 2021 to 2023.
              <br>
              I earned my M.S. in <b>AI</b>, <b><a href="https://www.csie.ntu.edu.tw">Computer Science</a></b> and Information Engineering (GPA <b>4.0</b>/4.3) from <b><a href="https://www.ntu.edu.tw">NTU</a></b> (the top <b>1</b> school in Taiwan) in 2021.
              <br>
              I can speak native <b>Chinese</b>, professional <b>English</b> and basic <b>Bahasa Melayu</b>.
              <br>
              Programming Language: Professional in <b>JavaScript</b>, <b>Python3</b>, <b>Java</b> and Experienced in Bash
              <br>
              Skills: <b>Web Programming</b>(Java Spring Boot, Vue3), SQL(PostgreSQL), <b>ML</b>(Scikit-learn and PyTorch), AI and Software Engineering
            </h5>
          </p>
        </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Work Experience</h4></span>
  <table id="WE" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Time</th>
        <th>Position</th>
        <th>Work Content</th>
        <th>Institution</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2021-2023</td>
        <td>Advanced Engineer</td>
        <td>Design Data Storage, Manipulatation and Analysis</td>
        <td><a href="https://www.novatek.com.tw">Novatek Microelectronics Corp., Hsinchu, Taiwan</a></td>
      </tr>
      <tr>
        <td>2024-Now</td>
        <td>Senior Software Engineer</td>
        <td>R&D</td>
        <td><a href="https://www.appier.com">Appier Inc, Taipei, Taiwan</a></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Education & Training</h4></span>
  <table id="ET" class="table table-striped table-bordered" style="width:100%">
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
        <td>2016-2017</td>
        <td><a href="http://www.um.edu.my/">University of Malaya, Kuala Lumpur, Malaysia</a></td>
      </tr>
      <tr>
        <td>2017.07</td>
        <td><a href="http://www.stat.sinica.edu.tw">Summer School, Institute of Statistical Science, Academia Sinica, Taipei, Taiwan</a></td>
      </tr>
      <tr>
        <td>2015-2019</td>
        <td><a href="http://www.utaipei.edu.tw">University of Taipei,Taipei, Taiwan</a></td>
      </tr>
      <tr>
        <td>2019-2021</td>
        <td><a href="http://www.ntu.edu.tw">National Taiwan University, Taipei, Taiwan</a></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Project & Publications</h4></span>
  <table id="PP"  class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Time</th>
        <th>Types</th>
        <th>Items</th>
        <th>Position</th>
        <th>Place</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2015</td>
        <td>Course Final Project Presentations</td>
        <td><a href="https://github.com/hcyuser/Where-is-Taipei-Metro">Where is Taipei Metro</a></td>
        <td>Project Manager & API Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2016</td>
        <td>Course Final Project Presentations</td>
        <td><a href="https://github.com/hcyuser/2016-JAVA2">Utaipei Portal</a></td>
        <td>Project Manager & API Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2016</td>
        <td>Course Final Project Presentations</td>
        <td><a href="https://github.com/hcyuser/2016-Introduction_to_E-Learning">Introduction_to_E-Learning</a></td>
        <td>Project Manager & Web Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2016</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td>A Corpus Analysis of Representation of South-Asia Migrant Workers in Taiwan Newspaper</td>
        <td><p>Author:<br>Chih-yang Huang(黃志揚), Chu-ying Kao(高竹瑩), I-chen Yeh(葉奕辰), Ho-shiuan Lin(林荷鍹)</p>
        <a href="https://1drv.ms/b/s!Av124FbBx2WUklk4MM_61f7V_j8X">[Poster]</a><a href="https://1drv.ms/b/s!Av124FbBx2WUklufKuFz1zKSYAlG">[Slides]</a>
        <p>In <a href="http://www.dadh.digital.ntu.edu.tw/">7th International Conference of Digital Archives and Digital Humanities</a> (poster paper)</p></td>
        <td>National Taiwan University, Taipei</td>
      </tr>
      <tr>
        <td>2016</td>
        <td>Community</td>
        <td><a href="https://github.com/hcyuser/Utaipei_News">Utaipei Announce Beautify</a></td>
        <td>Web Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2017</td>
        <td>Course Final Project Presentations</td>
        <td><a href="https://github.com/hcyuser/CBR_Mobile_Utaipei/blob/master/Smart%20Phone%20App%20Programming.pdf">Hotel Searching based on CBR and deployed on Android</a></td>
        <td>Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2017</td>
        <td>Community</td>
        <td><a href="https://github.com/hcyuser/UT-CSSA_Finance_System">UTaipei CSSA Finance System</a></td>
        <td>Designer</td>
        <td>University of Taipei, Taipei</td>
      </tr>
      <tr>
        <td>2018</td>
        <td><span class="badge  badge-warning">Conference Talks</span></td>
        <td><a href="https://sitcon.org/2018/">SITCON 2018</a></td>
        <td>Speaker</td>
        <td>Academia Sinica, Taipei</td>
      </tr>
      <tr>
        <td>2018</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td>A Study on Modeling and Classification of the Student Opinion Survey with Word2vec</td>
        <td><p>Author:<br>Chih-yang Huang(黃志揚), Yen-Hung Chen(陳彥宏), Mei-Ching Ho(何美靜)</p>
        <p>In <a href="http://par.cse.nsysu.edu.tw/~algo/">The 35th Workshop on Combinatorial Mathematics and Computation Theory</a></p></td>
        <td>Providence University, Taichung</td>
      </tr>
      <tr>
        <td>2018</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td><a href="https://doi.org/10.1007/978-981-13-9190-3_47">A Measure & Conquer Algorithm for the Minimum User Spatial-aware Interest Group Query Problem</a></td>
        <td><p>Author:<br>Chih-yang Huang(黃志揚), Po-Chuan Chien(簡伯銓), Yen-Hung Chen(陳彥宏)</p>
        <p>In <a href="https://ics2018.yuntech.edu.tw">ICS 2018</a></p></td>
        <td>National Yunlin University of Science and Technology, Yunlin</td>
      </tr>
      <tr>
        <td>2019</td>
        <td>Academic Project</td>
        <td><a href="http://doi.airiti.com/LandingPage/NTURCDH/10.6681/NTURCDH.DB_THDL/SERVICE/GIS">THDL 古契書歷史地理資訊系統</a></td>
        <td>Designer</td>
        <td>National Taiwan University, Taipei</td>
      </tr>
      <tr>
        <td>2019</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td>An user-oriented HGIS platform on Taiwanese Land Deeds</td>
        <td><p>Author:<br>Chih-yang Huang(黃志揚), <a href="https://www.mpiwg-berlin.mpg.de/users/nylin">Nung-yao Lin(林農堯)</a>, Chung-Hsiang Ou(歐仲翔)</p>
        <p>In <a href="https://wps.itc.kansai-u.ac.jp/jadh2019/">JADH 2019</a></p></td>
        <td>Kansai University, Osaka, Japan</td>
      </tr>
      <tr>
        <td>2019</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td>An HGIS Platform of Taiwanese Land Deeds</td>
        <td><p>Author:<br>Jieh Hsiang(項潔), Chih-yang Huang(黃志揚)</p>
        <p>In <a href="http://compling.hss.ntu.edu.sg/events/2019-pnc/">PNC 2019</a></p></td>
        <td>Nanyang Technological University, Singapore</td>
      </tr>
      <tr>
        <td>2020</td>
        <td>Academic Project</td>
        <td><a href="http://doi.airiti.com/LandingPage/NTURCDH/10.6681/NTURCDH.DB_DASH/Text">淡新檔案客家研究數位分析系統 (DASH)</a></td>
        <td>System IT</td>
        <td>National Taiwan University, Taipei</td>
      </tr>
      <tr>
        <td>2020</td>
        <td><span class="badge  badge-warning">Journal Papers</span></td>
        <td><a href="https://jit.ndhu.edu.tw/article/view/2348">Exact and Heuristic Algorithms for Some Spatial-aware Interest Group Query Problems</a></td>
        <td>Chih-Yang Huang, Po-Chuan Chien, Yen Hung Chen, "Exact and Heuristic Algorithms for Some Spatial-aware Interest Group Query Problems," Journal of Internet Technology, vol. 21, no. 4 , pp. 1199-1205, Jul. 2020.</td>
        <td>National Taiwan University, Taipei</td>
      </tr>
      <tr>
        <td>2020</td>
        <td><span class="badge badge-primary">Conference Proceedings</span></td>
        <td>Company Failure Risk Prediction Based on the Court's Judgments</td>
        <td>Author:<br> Chih-yang Huang(黃志揚)
        <p>In <a href="https://dadh2020.ascdc.tw">DADH 2020</a></p></td>
        <td>Academia Sinica, Taipei</td>
      </tr>
      <tr>
        <td>2022</td>
        <td>Community</td>
        <td>E.SUN AI Open Competition Winter 2021-Credit Card Transaction Category Recommendation</td>
        <td>He participated in this competition and was placed 13th out of 859 participants from 27th October, 2021 to 6th January, 2022.</td>
        <td><a href="https://www.esunbank.com.tw">E.SUN Commercial Bank</a>, Taipei</td>
      </tr>
      <tr>
        <td>2022</td>
        <td><span class="badge  badge-warning">Journal Papers</span></td>
        <td><a href="http://dx.doi.org/10.6853/DADH.202204_(9).0001">DocuWidgets: Enhanced Toolkits for DocuSky</a></td>
        <td>Huang, C. Y., Hsiang, J., & Tu, H. C. (2022). DocuWidgets: Enhanced Toolkits for DocuSky. 數位典藏與數位人文, (9), 1-13.</td>
        <td>National Taiwan University, Taipei</td>
      </tr>
      <tr>
        <td>2022</td>
        <td>Community</td>
        <td>Top 20 Team in the 2022 Taiwan <a href="https://presidential-hackathon.taiwan.gov.tw">Presidential Hackathon</a></td>
        <td>He participated in the 2022 Taiwan Presidential Hackathon. His team was placed top 20 out of 194 from the primary election. Our project is called <a href="https://inkrosetta.tw">Inkrosetta</a>, trying to bridge the information gap between citizens and government. The goal of this project is to build the uniform news platform for government, which is used to deliver news to citizens with varying approaches like speach reader and multilingual services. It will facilitate the understanding and communication from government to citizens.</td>
        <td><a href="https://www.ey.gov.tw">Executive Yuan</a>, R.O.C. (Taiwan)</td>
      </tr>
      <tr>
        <td>2023</td>
        <td>Community</td>
        <td>Bug Fix for <a href="https://github.com/hackmdio/codimd">CodiMD</a></td>
        <td>He participated in the development of <a href="https://github.com/hackmdio/codimd">CodiMD</a>, an open-source project serving as a real-time collaborative platform for markdown notes. Specifically, he addressed and resolved two bugs <a href="https://github.com/hackmdio/codimd/pull/1813">#1813</a> and <a href="https://github.com/hackmdio/codimd/pull/1814">#1814</a>. Following successful peer and code reviews, these fixes were merged into <a href="https://github.com/hackmdio/codimd/pull/1835">Release 2.5.0 #1835</a>.</td>
        <td></td>
      </tr>

    </tbody>
  </table>
</div>
<br>
<br>
<div class="container">
  <span class="row justify-content-center align-self-center"><h4>Academic Experience</h4></span>
      <table id="AE"  class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Time</th>
            <th>Position</th>
            <th>Project/Course</th>
            <th>Work Content</th>
            <th>Principal Investigator/Advisor</th>
            <th>Department</th>
            <th>Institution</th>

          </tr>
        </thead>
        <tbody>
            <tr>
              <td>2017~2018</td>
              <td>Teaching Assistant</td>
              <td>Computer Compendium</td>
              <td>Teaching Assistant</td>
              <td><a href="http://dhluserver.utaipei.edu.tw">Dong-Hwa Lu</a></td>
              <td>Department of Computer Science</td>
              <td>University of Taipei, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2017~2018</td>
              <td>Temporary Research Assistant</td>
              <td>多模態英文閱讀--利用功能語法之後設語言增進國中生之產生與建構意義之能力(1/2)，科技部 (MOST 106-2633-H-003-001) <a href="https://1drv.ms/b/s!Av124FbBx2WUnzyEgp0QyQE2c3lQ">Contract</a></td>
              <td>Statistics (ANOVA Testing) and Paper Research</td>
              <td><a href="http://www.eng.ntnu.edu.tw/members/bio.php?PID=198">Pei-Chin Chang</a></td>
              <td>Department of English</td>
              <td>National Taiwan Normal University, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2018</td>
              <td>Research Assistant</td>
              <td>教學意見調查平台中學生評論的言談分析: 基於語料庫實證研究，科技部 (MOST 106-2410-H-845-004) <a href="https://1drv.ms/b/s!Av124FbBx2WUpASj71RYA7J4Krjx">Contract</a></td>
              <td>Building Corpus System and Quantitative Linguistics Research (N-gram, Word2Vec)</td>
              <td><a href="http://163.21.236.197/~english/old_dat/teacher_int/Mei-ching-Ho.htm">Mei-Ching Ho</a></td>
              <td>Department of English Instruction</td>
              <td>University of Taipei, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2018</td>
              <td>Research Assistant</td>
              <td>臺灣省政史料數位資源開放平臺，科技部 (MOST 106-3114-E-002-018)</td>
              <td>Building the DocuXml Editor and the Converter between 淡新檔案 and DARC</td>
              <td><a href="http://www.digital.ntu.edu.tw/hsiang/">Hsiang, Jieh</a></td>
              <td><a href="http://www.digital.ntu.edu.tw">RCDH</a> and <a href="https://www.csie.ntu.edu.tw/">CSIE</a></td>
              <td>National Taiwan University, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2018~2020</td>
              <td>Research Assistant</td>
              <td><a href="http://doi.airiti.com/LandingPage/NTURCDH/10.6681/NTURCDH.DB_DASH/Text">淡新檔案之客家研究與數位分析系統</a>建置計畫 (客家委員會客家文化發展中心)</td>
              <td>Building THDL GIS System</td>
              <td><a href="http://www.digital.ntu.edu.tw/hsiang/">Hsiang, Jieh</a></td>
              <td><a href="http://www.digital.ntu.edu.tw">RCDH</a> and <a href="https://www.csie.ntu.edu.tw/">CSIE</a></td>
              <td>National Taiwan University, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>Research Assistant</td>
              <td>108年度國家文化記憶庫「臺大數位典藏資料介接及相關數位素材擴充完備計畫(II)案」
                (文化部)</td>
              <td>Maintain DocuSky</td>
              <td><a href="https://www.lis.ntu.edu.tw/~khchen/">Kuang-hua Chen</a></td>
              <td>Library</td>
              <td>National Taiwan University, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>Research Assistant</td>
              <td>以語料庫及多模態言談分析方法探究部落格商業贊助文，科技部</td>
              <td>Web data extraction</td>
              <td><a href="http://163.21.236.197/~english/old_dat/teacher_int/Mei-ching-Ho.htm">Mei-Ching Ho</a></td>
              <td>Department of English Instruction</td>
              <td>University of Taipei, Taipei, Taiwan</td>
            </tr>
            <tr>
              <td>2019~2020</td>
              <td>Research Assistant</td>
              <td>探究多模態教師寫作評論:影音回饋及線上即時評語之影響，科技部 (MOST 108-2410-H-845-012)</td>
              <td>Data Collection</td>
              <td><a href="http://163.21.236.197/~english/old_dat/teacher_int/Mei-ching-Ho.htm">Mei-Ching Ho</a></td>
              <td>Department of English Instruction</td>
              <td>University of Taipei, Taipei, Taiwan</td>
            </tr>
        </tbody>

      </table>

  </div>
  <br>
  <br>
  <div class="container">
          <div class="card col-12">
            <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Awards"><h5>Awards</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Certification"><h5>Certification</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#VolunteerExperience"><h5>Volunteer Experience</h5></a>
            </li>
            </ul>
          <!-- Tab panes -->
          <div class="tab-content">
              <div class="tab-pane container active" id="Awards">
                <h6>
                <br>
                <li><a href="#" data-toggle="modal" data-target="#MOSTModal">College Student Research Scholarship, MOST, Taiwan, 2018~2019</a></li><br>
                <li>Academic Achievement Award, University of Taipei, Taiwan, 2015~2018</li><br>
                <li><a href="https://service.utaipei.edu.tw/var/file/34/1034/img/867050061.pdf">Entrance Scholarship, University of Taipei, Taiwan, 2015~2018</a></li><br>
                <li>Literary Award, National Yilan Senior High School, Yilan, Taiwan, 2013~2014</li><br>
                <li>Academic Achievement Award, National Yilan Senior High School, Yilan, Taiwan, 2013~2014</li>
                <br>
                </h6>
              </div>
              <div class="tab-pane container fade" id="Certification">
                <h6>
                <br>
                <li>初階行銷傳播認證, <a href="http://www.tmca.org.tw/">TMCA</a>, Taiwan Marcom Certification Association, 2015</li><br>
                <li>TOEIC Score:685, ETS, 2015</li><br>
                <li>The General English Proficiency Test Intermediate,<a href="https://www.lttc.ntu.edu.tw/E_LTTC/E_GEPT.htm"> LTTC</a>, 2015</li>
                <br>
                </h6>
              </div>
              <div class="tab-pane container fade" id="VolunteerExperience">
                <h6>
                <br>
                <li><a href="http://kingcar.org.tw/">King Car Education Foundation</a>, 2015, 2017</li>
                <p>Teaching Assistant</p>
                <li><a href="http://www.wisland.org">世界公民島</a>, 2015</li>
                <p>Administrative Assistant</p>
                <li><a href="https://hitcon.org">HITCON Community</a>, 2016</li>
                <p>Administrative Assistant</p>
                <li><a href="http://www.tgdf.tw/">台北遊戲開發者論壇（Taipei Game Developers Forum)</a>, 2016</li>
                <p>Administrative Assistant & Photographer </p>
                <br>
                </h6>
              </div>
          </div>

      </div>

  </div>
  <br>
  <br>
  <div class="row">
    <div class="col-md-12">
            <span class="row justify-content-center align-self-center"><h4>Technology Skills</h4></span>
            <div id="chart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
  </div>

  <!-- The ContactModal -->
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
          <p>Email: <img src="email.png"></p>
          <p>Telegram: <a href='https://t.me/hcyuser'>https://t.me/hcyuser</a></p>
          <p>Messenger: <a href='https://m.me/hcyuser'>https://m.me/hcyuser</a></p>
          <p>LinkedIn: <a href='https://www.linkedin.com/in/hcyuser/'>https://www.linkedin.com/in/hcyuser/</a></p>
          <p>GitHub: <a href='https://github.com/hcyuser'>https://github.com/hcyuser</a></p>
          <p>ORCID: <a href='https://orcid.org/0000-0002-4057-2746'>https://orcid.org/0000-0002-4057-2746</a></p>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


  <!-- The MOSTModal -->
  <div class="modal fade" id="MOSTModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">College Student Research Scholarship, MOST <br> 科技部-大專學生研究計畫</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <p>Project: 空間興趣群組查詢問題之研究(The spatial-aware interest group query problem)</p>
          <p>Project Number: 107-2813-C-845-025-E</p>
          <p>Research Time: 2018.07.01~2019.02.28</p>
          <p>Thesis Advisor: <a href='https://arspb.nstc.gov.tw/NSCWebFront/modules/talentSearch/talentSearch.do?action=initBasic&rsNo=5aa75891276a4855876ba825740d103c&LANG=chi'>Yen-Hung Chen(陳彥宏)</a></p>


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
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script type="text/javascript">

          // Build the chart
          Highcharts.chart('chart', {
              chart: {
                  type: 'pie'
              },
              title: {
                  text: ''
              },
              tooltip: {
                  valueSuffix: '%'
              },
              plotOptions: {
                  series: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: [{
                          enabled: true,
                          distance: 20
                      }, {
                          enabled: true,
                          distance: -40,
                          format: '{point.percentage:.1f}%',
                          style: {
                              fontSize: '1.2em',
                              textOutline: 'none',
                              opacity: 0.7
                          },
                          filter: {
                              operator: '>',
                              property: 'percentage',
                              value: 10
                          }
                      }]
                  }
              },
              series: [
                  {
                      name: 'Percentage',
                      colorByPoint: true,
                      data: [
                        { name: 'Java', y: 30 },
                        { name: 'Shell Script', y: 10 },
                        { name: 'Python', y: 20 },
                        { name: 'JavaScript', y: 40 }
                      ]
                  }
              ]
          });
    </script>
</body>
</html>