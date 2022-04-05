<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume</title>
   <link rel="Stylesheet" href="resume.css"/>
   <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.min.js"></script>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <style>
      .card-header,#per_info, .menu{
        background-image: linear-gradient(to bottom right, rgb(245, 137, 137), rgb(245, 245, 175));
      }
      #per_info > div{
        background-color: rgba(253, 238, 231, 0.877);  
      }
      .card-body{
        background-color: rgba(245, 205, 187, 0.877);  
      }
      #uli > a:hover >li  {
       background-color: black;
       color: white;
      }
      #snav>a:hover{
        background-color: rgb(241, 164, 154);
       
      }
  
     
    </style>
  </head>
<body>
  
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-3 ">
        <div class="menu d-lg-block d-none position-fixed" style="height: 100%;">
            <img src="pic.jpg"   alt="Profile" id="img" class="img-fluid rounded ms-5" width="100" height="100">
            <ul id="uli" class="list-unstyled"> 
             <a href="#per_info" class="fs-5 text-decoration-none text-dark fw-bold d-block shadow-lg mt-3"> <li>About</li> </a>
            <a href="#edu"    class="fs-5  text-decoration-none text-dark fw-bold d-block shadow-lg mt-3">  <li>Qualification</li></a>
            <a href="#tech "  class="fs-5  text-decoration-none text-dark fw-bold d-block shadow-lg mt-3" ><li>Technical Skill</li> </a>
            <a href="#project"  class="fs-5  text-decoration-none text-dark fw-bold d-block shadow-lg mt-3"><li>Project </li> </a>
            <a href="#vid"  class="fs-5  text-decoration-none text-dark fw-bold d-block shadow-lg mt-3"><li>Project overview</li> </a>
            <a href="#cert"  class="fs-5  text-decoration-none text-dark fw-bold d-block shadow-lg mt-3"><li>Professional Certificate</li> </a>
              </ul>
    </div>
    
   
    </div> <!---col-lg-3-->
    
<!--    <nav class="shadow-2xl d-lg-none d-block position-fixed">
      <div class="d-flex" id="snav">
        <a href="#per_info" class="fs-6 text-decoration-none  text-dark fw-bold d-block shadow-lg mt-3"> About </a>
        <a href="#edu"    class="fs-6  text-decoration-none ps-2 text-dark fw-bold d-block shadow-lg mt-3">  Qualification</a>
        <a href="#tech "  class="fs-6  text-decoration-none ps-2 text-dark fw-bold d-block shadow-lg mt-3" >Technical Skill </a>
        <a href="#project"  class="fs-6  text-decoration-none ps-2 text-dark fw-bold d-block shadow-lg mt-3">Project  </a>
        <a href="#vid"  class="fs-6  text-decoration-none ps-2 text-dark fw-bold d-block shadow-lg mt-3">Project overview </a>
        <a href="#cert"  class="fs-6  text-decoration-none ps-2 text-dark fw-bold d-block shadow-lg mt-3">Professional Certificate </a>
       
      </div>
  </nav>-->
    <div class="col-lg-9 ">
    
      <section class="mt-2">
        <div class="h-100 shadow-lg" id="per_info" >
            <h3 class="fw-bolder fs-3 ps-3">Personal Information</h3>
           <div class="fw-bold text-info fs-4 d-block shadow ps-3" > Dharvi Zanzrukia </div> 
            <div class="fs-4 text-dark d-block mt-3 shadow ps-3">dzanzrukia15@gmail.com </div>
           <div class="fs-4 text-dark d-block mt-3 shadow ps-3"> http://www.linkedin.com/in/dharvi-zanzrukia-08659a210  </div>
           <div class="fs-4 text-dark d-block mt-3 shadow ps-3">Objective: To acquire a position within the field of Information Technology with a company that will 
            allow me to demonstrate my skills, knowledge, and desire to grow as an individual. I am 
            looking to acquire a position with a company that provides the opportunity for further growth 
            and development within the company.</div>
        </div>
      </section>
      <section class="mt-5">
        <div class="card" id="edu">
          <div class="card-header">
              <div class="h3 text-decoration-underline">Qualification</div> <br>
          </div>
          <div class="card-body">
              <table id="tab1" class=" h5 table  bordered" aria-describedby="Qualification" style="height: 300px;">
                  <tr class="table-warning">
                      <th id="de">Degree</th>
                      <th id="coll">College</th>
                      <th id="resu">Result</th>
                      <th id="yr">Year</th>
                    </tr>
                    <tr  class="table-info">
                        <td>B.E. IT</td>
                        <td>L.J Insititue  of  Engineering</td>
                        <td>9.42 SPI</td>
                        <td>2022</td>
                      </tr>
                      <tr  class="table-info">
                        <td>D.E. IT</td>
                        <td>Govenrment polytechnic for Girls</td>
                        <td>9.65 SPI</td>
                        <td>2019</td>
                      </tr>
                      <tr  class="table-info">
                        <td>SSC</td>
                        <td>Madhav Vidya Sankul</td>
                        <td>82%</td>
                        <td>2016</td>
                      </tr>
                  
              </table>
          </div>
      </div><br><br>
      </section>

      <section class="mt-5">
        <div class="card" id="tech">
          <div class="card-header">
              <p class="h3 text-decoration-underline">Technical skills</p>
          </div>
          <div class="card-body">
              <ul id="p_info" class="pl ">
                  <li>C</li>
                  <li>C++</li>
                  <li>PHP</li>
                  <li>Intermediate python </li>
                  <li>Advanced Ms Excel</li>
                  <li>SQL database</li>
                </ul>
          </div>
      </div><br><br>
      </section>
<section class="mt-5 card" id="project">
  <div class="card-header">
    <p class="h3 text-decoration-underline">Project</p>
</div>
<div class="card-body">
    <ul id="p_info" class="mt-3" >
        <li class="text-primary ">Title: Sheltering Regulation System</li> 
        <li class="list-unstyled text-dark" >
            Software useful for manage Housing society, 
            Residencies, Apartments associations
            maintains database of all Society members.The Society maintenance excellent up to data 
            communications to all Society Member. 
        </li>
      </ul>
        <ul id="p_info">
        <li class="text-primary"> Billing System (Gujarat Industrial Hackathon Project)</li> 
        <li class="list-unstyled text-dark">
          The system entitled “Web based GST billing Software” is a web based application 
          software designed for all type of companies to maintain the bills as per the recent 
          trending of filing tax in the name of Goods and Service Tax (GST) by the new 
          government.
        </li>
    </ul>
</div>
<br><br>
</section>
<div class="card" id="vid">
  <div class="card-header">
      <p class="h3 text-decoration-underline">Project review</p>
  </div>
  <div class="card-body">
    <div class="ratio ratio-21x9">
      <iframe src="Admin.mp4" title="YouTube video" allowfullscreen></iframe>
    </div>
  </div>
</div> <br><br>

<div class="card" id="cert">
  <div class="card-header">
      <p class="h3 text-decoration-underline">Professional Certificate</p>
  </div>
  <div class="card-body">
      <ul id="p_info" class="pl">
          <li class="pt-3">Professional Certificate of <strong>on Crash Course On Python.</strong></li>
          <li class="pt-2">Professional Certificate of <strong>Rice University On Data Analysis Using Excel.</strong></li>
          <li class="pt-2">Certificate of Participation In <strong>Gujarat Industrial Hackathon 2019.</strong></li>
        </ul>
  </div>
</div>
    </div><!----col-lg-10-->
    </div><!---row-->
  </div><!---container-->
</body>
</html>