/**
 * Created by FIQC on 10/07/2017.
 */

var sequenceElement = document.getElementById("sequence");
var options = {
    startingStepAnimatesIn: true,
    autoPlay: false,
    phaseThreshold: 250,
    preloader: true,
    reverseWhenNavigatingBackwards: false,
    fadeStepWhenSkipped: false
};
var mySequence = sequence(sequenceElement, options);
