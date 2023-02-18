<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>


</style>
</head>
<body>

<!-- Navbar Section -->
<div class="navbar">
  <a href="#address">Home</a>
  <a href="#about_me">About Me</a>
  <a href="#skills">Skills</a>
  <a href="#cv">CV</a>
  <a href="#contact">Contact</a>
  <a href="a_admin.php">Admin</a>
</div>

<!-- Address Section -->
<div id="address">
    <h1><font color="red">Maishanu Zaharadeen A</font></h1>
    <address>El-Maishan Enterprise, View Pion Nigeria Limited, Kaduna.<br> No. 11 Mai'unguwa Road, 
	Kinkinau G.R.A. Kaduna.<hr> </address>
</div>

<!-- About Section -->
<div id="about_me"><br>
    <h2 style="text-align: center;"><font color="red">About Me</font></h2>
    <div class="about_left">
        <img src="el.jpg" alt="" width="100%" height="90%">
    </div>
    <div class="about_right">
        
        <p style="line-height: 1.5rem;">My name is Maishanu Zaharadeen Abubakar. I was born on the 5th Nov, 1994 in a town called Takum Local
             Government Area of Tarabe State. I am an indegiene of Taraba State, from Karofi Takum Local Government Area, Taraba State.
             I am a software developer and studied Computer Science in West African Union University Republic of Benin. My passion for software 
             development started when i knew i could make my dreams come true in the IT industry. One of the big dreams is work at PAN, at my convenience
             and make good money from it. Today, I know I am close to actualizing those dreams because I have sharpen my software development skills, which 
             is one of the trending skills that pays well in the world today. <br> I am Single and means of survival in Nigeria is becoming extremely
              difficult with salary work, one of the reasons that made me explore more. After some couple of years, i have developed my skills in different areas of the IT industry, I am building a firm that will not only take care of 
              my needs, but will also take care of some skillful youths that are not employed by the government. <br>
              I am the CEO of View Point Ideal Technology, an industry that is into software development, consultancy services and other IT related
              solutions that will promote other industries that are in needed of better services that will maximize their profit. 
				<br><br><br><br><br><br><br><br><br>
		</p>
    </div>
</div>

<!-- Skills Section -->
<div id="skills">
    <h2 style="padding-left: 15px; padding-top: 15px;"><font color="red">IT Skills</font></h2>
    <p style="padding-left: 15px;">This section is a brief about my IT skills:</p>
    <div>
        <dl>
            <dt><b>Software Development Skills</b></dt>
            <dd>- HTML, CSS & JavaScript</dd>
            <dd>- Web Development Framework (W3.css, Bootstrap)</dd>
            <dd>- Content Management System (Joomla, Wix, Wordpress)</dd>
            <dd>- C, C++, and C#</dd>
			<dd>- Java, Quick Basic</dd>
			<dd>- Python</dd>
            <dd>- Php, Mysql</dd>
			
            
            <dt><b>Office Application and Graphic Application Skills</b></dt>
            <dd>- Word Processing (Ms Word)</dd>
            <dd>- Presentation Application (PowerPoint)</dd>
            <dd>- Spreadsheets (Ms Access & Ms Excel)</dd>
            <dd>- Graphic Application (CorelDraw, Photoshop, Paint)</dd>

            <dt><b>Hardware & Maintenance Skills</b></dt>
            <dd>- Troubleshooting Technique of all kinds</dd>
            <dd>- Installations of Operating system as well as Microsoft Server</dd>
            <dd>- Maintenance of hardware components in a computer system</dd>
            <dd>- Installation of networking cables and configuration of switches and routers</dd>
            <dd>- Php, Mysql</dd>
        </dl>
    </div>
</div>

<!-- CV Section -->
<div id="cv">
<h2 style="padding-left: 15px; padding-top: 15px;"><font color="red">C.V</font></h2>
    <h2>Working Experience</h2>
    <p>This section is a brief about my working experience.</p>
    <div>
        <ol>
            <li>-View Point Ideal - CEO (2022 - Date)</li>
            <li>- El Maishanu Head, ICT and ICT Instructor (2014 - Date)</li>
            <li>-International Association of Engineer IAEng (2022)</li>
            <li>PAN Learning Centre - ICT Instructor (2022)</li>
			
        </ol>
        <h2>Qualification Obtained</h2>
        <p>A brief about qualifications obtained:</p>
        <ol>
            <li>Diploma in Computer Repair and Maintenance </li>
			<li>Diploma in Excel</li>
            <li>Peace Club of Nigeria</li>
            <li>B.Sc Computer Science</li>
        </ol>
        <h2>Hobbies</h2>
        <p>Here are some hobbies:</p>
        <ul>
            <li>Coding</li>
            <li>Traveling</li>
            <li>Studying</li>
			<li>Recitation of Holly Books</li>
			<li>Watching Football</li>
        </ul>
    </div>
</div>

<!-- Contact Section -->
<div id="contact"><br>
    <h2><font color="red">Contact Me Here</font></h2>
    <div>
        <form action="ind.php" method="POST" onsubmit="return validate(this)">
            <label for="firstname">First Name:</label><br>
            <input type="text" name="fname" required><br><br>
            <label for="lastname">Last Name:</label><br>
            <input type="text" name="lname" required><br><br> 
            <label for="email">Email Address:</label><br>
            <input type="email" name="email" required><br><br>
            <label for="textarea">Subject:</label><br>
            <input type="textarea" style="height: 200px;" name="area" required><br><br>
            <input type="submit" name="submit" value="Message Me">         
        </form>
    </div>
</div>

<!-- Footer Section -->
<div class="footer">

</div>
</body>
</html>
