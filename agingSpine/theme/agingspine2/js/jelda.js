/*jQuery for External Link Disclaimer Alert
Done by: Anish Karim C., Drupal Engineer, Corratech 
Date: 2011 April 26*/

if(Drupal.jsEnabled) {
  $(document).ready(function() {
 
  $('a').filter(function() {
   return this.hostname && this.hostname !== location.hostname;
 })
 .click(function () { 
 var x=window.confirm('You are now being directed out of www.agingspinecenter.com.  Click OK to proceed.');
var val = false;
if (x)
val = true;
else
val = false;
return val;
 
        });
  });
} 