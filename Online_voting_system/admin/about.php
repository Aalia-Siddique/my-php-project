<!-- <h1><font color="gray">Online Voting System</font></h1>
</br>
<font color="#555">
<p>For Carlos Hilado Memorial State college Laboratory School</p>
<p>Develop By:</p>
</font>
</br>
<div id="accordion2" class="accordion">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" href="#collapseOne" data-parent="#accordion2" data-toggle="collapse">John kevin Lorayna</a>
</div>
<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
<div class="accordion-inner"> 
<p><font color="gray">Position:&nbsp;Programmer</font></p>
<p><font color="gray">FirstName:&nbsp;John Kevin</font></p>
<p><font color="gray">LastName:&nbsp;Lorayna</font></p>
<p><font color="gray">Age:&nbsp;18</font></p>
<p><font color="gray">Address:&nbsp;Bago City</font></p>
<p><font color="gray">Email:&nbsp;jkevlorayna@gmail.com</font></p>
<p><font color="gray">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kevin_lorayna@yahoo.com</font></p>
<div class="user_image"><img src="project_member/kev.jpg" width="200" height="250"></div>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" href="#collapse4" data-parent="#accordion2" data-toggle="collapse">Sherwin Laylon</a>
</div>
<div id="collapse4" class="accordion-body collapse">
<div class="accordion-inner">
<p><font color="gray">Position:&nbsp;Project Manager</font></p>
<p><font color="gray">FirstName:&nbsp;Sherwin</font></p>
<p><font color="gray">LastName:&nbsp;Laylon</font></p>
<p><font color="gray">Age:&nbsp;19</font></p>
<p><font color="gray">Address:&nbsp;St. Therese Village</font></p>
<p><font color="gray">Email:&nbsp;zachary.sherwin@gmail.com</font></p>
<div class="user_image"><img src="project_member/sherwin.png" width="200" height="250"></div>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" href="#collapseTwo" data-parent="#accordion2" data-toggle="collapse">May Memdoza</a>
</div>
<div id="collapseTwo" class="accordion-body collapse">
<div class="accordion-inner">
<p><font color="gray">Position:&nbsp;Assistant Project Manager</font></p>
<p><font color="gray">FirstName:&nbsp;May</font></p>
<p><font color="gray">LastName:&nbsp;Mendoza</font></p>
<p><font color="gray">Age:&nbsp;20</font></p>
<p><font color="gray">Address:&nbsp;Victorias City</font></p>
<p><font color="gray">Email:&nbsp;</font></p>
<div class="user_image"><img src="project_member/may.jpg" width="200" height="250"></div>
</div>

</div>
</div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" href="#collapse3" data-parent="#accordion2" data-toggle="collapse">Golda Nepomuceno</a>
</div>
<div id="collapse3" class="accordion-body collapse">
<div class="accordion-inner">
<p><font color="gray">Position:&nbsp;System Analyst</font></p>
<p><font color="gray">FirstName:&nbsp;Golda</font></p>
<p><font color="gray">LastName:&nbsp;Nepomuceno</font></p>
<p><font color="gray">Age:&nbsp;20</font></p>
<p><font color="gray">Address:&nbsp;Silay City</font></p>
<p><font color="gray">Email:&nbsp;golda@yahoo.com</font></p>
<div class="user_image"><img src="project_member/golda.png" width="200" height="250"></div>
</div>
</div>
</div>


<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" href="#collapse5" data-parent="#accordion2" data-toggle="collapse">Mary Ver Liboon</a>
</div>
<div id="collapse5" class="accordion-body collapse">
<div class="accordion-inner">
<p><font color="gray">Position:&nbsp;Designer</font></p>
<p><font color="gray">FirstName:&nbsp;Mary Ver</font></p>
<p><font color="gray">LastName:&nbsp;Liboon</font></p>
<p><font color="gray">Age:&nbsp;18</font></p>
<p><font color="gray">Address:&nbsp;Talisay City</font></p>
<p><font color="gray">Email:&nbsp;michever_whte@yahoo.com</font></p>
<div class="user_image"><img src="project_member/ver.jpg" width="200" height="250"></div>
</div>
</div>
</div>
	  </div>
	  </div> -->


	  <?php
// Hardcoded incidents array
$incidents = [
    [
        "location" => "City Center Mall",
        "description" => "Fire in the food court.",
        "severity" => "High",
        "reported_at" => "2024-12-01 15:30:00"
    ],
    [
        "location" => "Main Highway",
        "description" => "Multiple vehicle collision.",
        "severity" => "Critical",
        "reported_at" => "2024-12-05 09:00:00"
    ],
    [
        "location" => "Green Park",
        "description" => "Tree fell due to strong winds.",
        "severity" => "Medium",
        "reported_at" => "2024-12-10 18:20:00"
    ],
    [
        "location" => "Downtown",
        "description" => "Gas leakage reported.",
        "severity" => "High",
        "reported_at" => "2024-12-12 21:45:00"
    ],
    [
        "location" => "North Avenue",
        "description" => "Building collapse incident.",
        "severity" => "Critical",
        "reported_at" => "2024-12-14 10:15:00"
    ]
];

// Get a random incident
$randomIncident = $incidents[array_rand($incidents)];

// Display the random incident
echo "<h1>Random Emergency Incident</h1>";
echo "<p><strong>Location:</strong> " . $randomIncident['location'] . "</p>";
echo "<p><strong>Description:</strong> " . $randomIncident['description'] . "</p>";
echo "<p><strong>Severity:</strong> " . $randomIncident['severity'] . "</p>";
echo "<p><strong>Reported At:</strong> " . $randomIncident['reported_at'] . "</p>";
?>

