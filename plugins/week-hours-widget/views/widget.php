<!-- This file is used to markup the public-facing widget. -->

<P>   
   <?php if (strlen(trim($weekdays)) > 0) : ?>
   <span>Monday-Friday: </span>
   <?php echo $weekdays; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($saturdays)) > 0) : ?>
   <span>Saturdays: </span>
   <?php echo $saturdays; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($sundays)) > 0) : ?>
   <span>Sundays: </span>
   <?php echo $sundays; ?>
   <?php endif; ?>
</p>