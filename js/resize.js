/**
 * @binding jQuery
 * 
 * resize a list of modules to fit a screen
 * 
 * @param {Object} DOM target cells to resize
 * @param {Object} DOM the target container to aspire to resize to ( default is $(window) )
 * @param {Number} to compensate for padding width
 * @param {Number} to compensate for padding height
 * @param {Number} to compensate for margin width
 * @param {Number} to compensate for margin height
 * 
 * */
function resize($t,$container,pw,ph,mw,mh) {
   // @var {Number}
   var total = 0;
   // @var {Number}
   var rowtotal = 0;
   // @var {Number}
   var max = 0;
   // @var {Object}
   var cells = {};
   
   // set defaults
   if (undefined === pw)
       pw = 5;
   //
   if (undefined === ph)
       ph = 5;
   //
   if (undefined === mw)
       mw = 0;
   //
   if (undefined === mh)
       mh = 0;
   //
   if(undefined === $container)
       $container = $(window);
   
   // clear the previous settings
   $t.attr('style','');
   
   // loop the nodes of interest
   $t.each(function(){
       // if this row has yet to be set
       if(!cells.hasOwnProperty($(this).position().top)) {
           // initialize it as the number 1
           cells[$(this).position().top] = 1;
           // add to the divisor for the height
           rowtotal++;
       }else{
           // add to the divisor for width
           cells[$(this).position().top]++;
       }
   });
   // set the values we found
   // ex: ((target width) / (cell width)) - ( padding + margin )
   $t.width(($container.width() / cells[Object.keys(cells)[0]]) - (pw+mw));
   $t.height(($container.height() / rowtotal) - (ph+mh));
}