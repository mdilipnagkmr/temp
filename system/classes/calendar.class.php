<?php
	
	class calendar {

	

		var $month;

		var $year;

		var $dayLinks;

		var $calRender;

		

		function calendar($m=NULL, $y=NULL, $dl=NULL) {

			/* Assign a m/y for the calendar to be generated */

			$this->month = (!is_null($m)?$m:date("m"));

			$this->year = (!is_null($y)?$y:date("Y"));

			/* Assign the day links */

			$this->dayLinks = (is_array($dl)?$dl:array());

		}

		

		function injectDate($date, $link) {

			$this->dayLinks[$date] = $link;

		}

		

		/* Just a shortcut ;) */

		function makeAndFlush() {

			$this->make();

			return $this->flush();

		}



		function make() {

			/* Calendar maker */

			$c = "<div id=\"calendar\">";

			

			/* Find the position of the first day of that month in the first week of the month */

			$dayOne = date("w", mktime(0,0,0,$this->month,1,$this->year))+1;

			

			/* Find how many days there is in the given month */

			$daysInMonth = date("t", mktime(0,0,0,$this->month,1,$this->year))+1;

			

			/* Set a pointer variable */

			$dayNo = 1;
			
			$week_days = array("SUN","MON","TUE","WED","THU","FRI","SAT");
			
			$c .= "<table width='100%' cellspacing='0px' cellpadding = '2px' >";

				$c .= "<tr><th colspan='7' style='width:90%;background-color: #cccccc;color:#666666' align='center' valign='middle'>". date("F", mktime(0,0,0,$this->month,1,$this->year)) ."</th></tr>";

			//$c .= "</div>";

			$c .= "<tr id=\"calendar_header\">";
			foreach ($week_days as $dayName) 
			{
				$c .= "<td >$dayName</td>";
			}
					
			$c .= "</tr>";

			for ($row=1; $dayNo < $daysInMonth; $row++) 
			{

				$c .= "<tr>";

				/* Print a day */

				for ($col=1; $col <= 7; $col++) 
				{

					if ($row==1 && $col < $dayOne) 
					{

						/* Make a blank cell */

						$c .= "<td id=\"calendar_emptyday\">&nbsp;</td>";

					} 
					elseif ($dayNo >= $daysInMonth) 
					{

						$c .= "<td id=\"calendar_emptyday\">&nbsp;</td>";

						$dayNo++;

					} 
					else 
					{

						if ($this->month.$dayNo.$this->year == date("mdY")) 
						{

							$dayTag = "<strong>{$dayNo}</strong>";

						} 
						else $dayTag = $dayNo;

						if (in_array($dayNo, array_keys($this->dayLinks))) 
						{

							$c .= "<td id=\"calendar_busyDay\"><a href=\"".$this->dayLinks[$dayNo]."\">{$dayTag}</a></td>";

						} 
						else 
						{

							$c .= "<td id=\"calendar_day\">{$dayTag}</td>";

						}

						$dayNo++;

					}

				}

				

				$c .= "</tr>";

			}

			$c .= "</table>";



			$this->calRender = $c;

			unset($c);

			return true;

		}

		

		function flush() {

			return $this->calRender;

		}

    }

?>