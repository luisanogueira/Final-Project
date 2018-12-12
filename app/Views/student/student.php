<?php  include "header.php"; 
	
require_once "../../Controllers/CourseController.php"; ?>

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

	<?php  
	// Get all courses where trainer with ID = 32 is enrolled
		$login_userid = $_SESSION['student'];
		$courses = $course->getCourses($login_userid);
	?>
	
	<div class="row">
		<div class="col-6">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupCourse">Course</label>
			  </div>
			  <select id="inputGroupCourse" class="custom-select">
			    <option selected disabled>Choose...</option>
			    <?php foreach ($courses as $value) { ?>
			    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
			    <?php } ?>
			  </select>
			</div>
		</div>

		<div class="col-6">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupCourseDay">Course Day</label>
			  </div>
			  <select id="inputGroupCourseDay" class="custom-select">
			    <option selected>Choose Course first</option>
			  </select>
			</div>
		</div>
	</div>

           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Your Progress</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
		
	<div class="row">
		<div class="col-sm-4 col-md-3">
			<div class="progress" data-percentage="100">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div class="ml-4">
						100%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
			<div>
				<h4 class="text-center">HTML</h4>
			</div>
			<button class="btn btn-outline-primary btn-sm btn-block mb-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		    	Details
		  	</button>
		  	<div class="expand collapse mb-3" id="collapseExample">
				<div class="card card-body">
				   	<ul>Day 01
				   		<br>
						<strong>Total: 95%</strong>
				   		<li>Basic: 100%</li>
				   		<li>Intermediate: 100%</li>
				   		<li>Advanced: 100%</li>
				   		<li>Challenge: 95%</li>
				   	</ul>
					<ul>Day 02
						<br>
						<strong>Total: 95%</strong>
						<li>Basic</li>
				   		<li>Intermediate</li>
				   		<li>Advanced</li>
				   		<li>Challenge</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-sm-4 col-md-3">
			<div class="progress" data-percentage="85">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div class="ml-4">
						85%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
			<div>
				<h4 class="text-center">CSS</h4>
			</div>
			<button class="btn btn-outline-primary btn-sm btn-block mb-3" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
		    	Details
		  	</button>
		  	<div class="expand collapse mb-3" id="collapseExample2">
				<div class="card card-body">
				   	<ul>Day 01
				   		<br>
				   		<strong>Total: 90%</strong>
				   		<li>Basic: 99%</li>
				   		<li>Intermediate: 91%</li>
				   		<li>Advanced: 80%</li>
				   		<li>Challenge: 80%</li>
				   	</ul>
					<ul>Day 02
						<br>
				   		<strong>Total: 95%</strong>
						<li>Basic</li>
				   		<li>Intermediate</li>
				   		<li>Advanced</li>
				   		<li>Challenge</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="col-sm-4 col-md-3">
			<div class="progress" data-percentage="70">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div class="ml-4">
						70%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
			<div>
				<h4 class="text-center">SaSS</h4>
			</div>
			<button class="btn btn-outline-primary btn-sm btn-block mb-3" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
		    	Details
		  	</button>
		  	<div class="expand collapse mb-3" id="collapseExample3">
				<div class="card card-body">
				   	<ul>Day 01
				   		<br>
				   		<strong>Total: 75%</strong>
				   		<li>Basic: 100%</li>
				   		<li>Intermediate: 100%</li>
				   		<li>Advanced: 60%</li>
				   		<li>Challenge: 60%</li>
				   	</ul>
					<ul>Day 02
						<br>
				   		<strong>Total: 65%</strong>
						<li>Basic</li>
				   		<li>Intermediate</li>
				   		<li>Advanced</li>
				   		<li>Challenge</li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<div class="col-sm-4 col-md-3">
			<div class="progress" data-percentage="90">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div class="ml-4">
						90%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
			<div>
				<h4 class="text-center">JavaScript</h4>
			</div>
			<button class="btn btn-outline-primary btn-sm btn-block mb-3" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
		    	Details
		  	</button>
		  	<div class="expand collapse mb-3" id="collapseExample4">
				<div class="card card-body">
				   	<ul>Day 01
				   		<br>
				   		<strong>Total: 95%</strong>
				   		<li>Basic: 99%</li>
				   		<li>Intermediate: 100%</li>
				   		<li>Advanced: 90%</li>
				   		<li>Challenge: 85%</li>
				   	</ul>
					<ul>Day 02
						<br>
				   		<strong>Total: 95%</strong>
						<li>Basic</li>
				   		<li>Intermediate</li>
				   		<li>Advanced</li>
				   		<li>Challenge</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-5 col-sm-12 profile m-3">
			<p class="p-2">
			<?php 
			echo "<strong>" . date("l") . ", ";
			echo date("d-m-Y") . "</strong><hr>";
			?>	
			</p>

				<p id="tech_name">Technology:</p>
				
				<p>Pair partner: 
					<div id="pair_partners"></div>
				</p>
				<p id='github_name'>GitHub Name: </p>		
		</div>

		<div class="col-md-5 col-sm-12 profile m-3">

			<h4 class="mt-2">Exercises</h4>

			<?php 
			$table = 'course_exercises ce';
			$fields = 'et.option_label as type, task_name, short_description';
			$join = 'INNER JOIN exercise_type et ON ce.exercise_type_id = et.id';
			$where = 'WHERE course_day_id = 1';
			$orderby = 'ORDER BY ce.order_nr';
				$result = $obj->read($table, $fields, $join, $where);

				foreach($result as $value) { 
					$test = (isset($test)) ? $test : '';
					if ($test != $value['type']){ ?>
					<p class="mt-2">Type: <?php echo $test = $value['type']; ?></p> <?php } ?>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    <?php echo $value['task_name'] ?>
					  </label>
					  <p>Description: <?php echo $value['short_description'] ?></p>
					</div>
				<?php } ?>
			
		</div>
	</div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	//change this to php!!!
	//nachdem auf course day gewählt---> Ajax Abfrae, prüfen, gibt es Paare für diesen Tag? Falls ja, gib mir die Infos dazu (zwei Felder) und drucke es

	$('#inputGroupCourse').on('change',function(){
		getCourseday($(this).val());
		course = $('#inputGroupCourse option:selected').text();

	});

	$('#inputGroupCourseDay').on('change',function(){
		console.log(course)
		var course_day = $('#inputGroupCourseDay option:selected').text();
		$('#tech_name').html('Technology: ' + course_day)

		getPair($(this).val(), <?php echo $login_userid; ?>, course_day, course);
		
	});

	function getPair(courseDayId, userId, courseDay, course){

		$.ajax({
		url:"../../Controllers/action_course.php",
          method: "post",
          data:{'category':'fetch_pairs', 'courseDayId':courseDayId, 'userId': userId},
          dataType:"text",
          success:function(response)
          {
          	var response = $.parseJSON(response);
          	content = '';
          	user_lnames = '';

          	for (var i = 0; i< response.length; i++){
          		if (i == 0){
          			content += '<p><b>' + response[i].fname +' ' + response[i].lname + '</b></p>';
          			user_lnames += response[i].lname;
          		} else {
          		content += '<p>' + response[i].fname +' ' + response[i].lname + '</p>';
          		user_lnames += '-' + response[i].lname;
          		}
          	}
			$('#pair_partners').html(content);
			$('#github_name').html('Github: <br>' + course + '-' + courseDay + '-' + user_lnames)
			// course+course_day+lname1+lname2
          }//FSWD60 -GIT_DAY 1Waything-Kear-O'Fearguise
		});

	}

	function getCourseday(courseId) {
		$.ajax({
          url:"../../Controllers/action_course.php",
          method: "post",
          data:{'category':'fetch_course_days', 'course_id':courseId, 'userId':<?php echo $_SESSION['student']; ?>},
          dataType:"text",
          success:function(response)
          {
          	$('#inputGroupCourseDay').html('<option value="" selected disabled>Choose...</option>');

          	var response = $.parseJSON(response);
          	
          	for(var i=0; i< response.length;i++){
			// creates option tag
  				$('<option/>', {
        			html: response[i].name,
        			value: response[i].id
        		}).appendTo('#inputGroupCourseDay'); //appends to select if parent div has id dropdown
			}
          }
		});
	}

}); //end of document.ready function
</script>
<?php include "../footer/footer.php"; ?>