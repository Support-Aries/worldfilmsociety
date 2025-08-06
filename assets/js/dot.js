var svg = Snap("#paper");
var circ = svg.polyline("10,1 4,19.8 19,7.8 2,7.8 16,19.8")
  .attr({fill:"rgba(13, 15, 151,.1)"})
 .attr({stroke:"rgba(13, 15, 151,.2)"})
   .attr({strokeWidth:"1"})
  .pattern(0,0,19,19)
  .attr({patternTransform: "rotate(-15)"});
svg.rect(0,0,'100%','100%').attr({fill: circ});



var svg = Snap("#poper");
var circ = svg.polygon("20,2 8,39.6 38,15.6 2,15.6 32,39.6")
  .attr({fill:"hsla(0, 50%, 50%,.08)"})
 .attr({stroke:"rgba(13, 15, 151,.05)"})
   .attr({strokeWidth:"1"})
  .pattern(0,0,39,39)
  .attr({patternTransform: "rotate(-45)"});
svg.rect(0,0,'100%','100%').attr({fill: circ});


