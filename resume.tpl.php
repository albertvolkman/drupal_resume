<?php
  print '<h2><center>' . $firstname . ' ' . $lastname . '</center></h2>';
  print '<center>' . $contactemail . '</center>';
  print '<center>' . $current_area . ' ' . $zipcode . '</center>';

  print 'Objective: ' . $objective . '<br />';
  print 'Positions of interest: ' . print_r($positions,1) . '<br />';
  print 'Available starting: ' . $startwork . '<br />';

  print '<h3>Work Eligibility</h3>' . drupal_render($available) . '<br />';

  print '<h2>Education and Skills</h2>';
  print 'Highest level of education: ' . $education . '<br />';
  print 'Skills and Qualifications: ' . $skills . '<br />';
  print 'Project Achievements: ' . print_r($achievements,1) . '<br />';

  print '<h2>Work History</h2>';
  print 'Armed forces: ' . drupal_render($armedforces) . '<br />';
  print 'Experience: ' . $experience . '<br />';
  print 'References: ' . $reference . '<br />';
?>
