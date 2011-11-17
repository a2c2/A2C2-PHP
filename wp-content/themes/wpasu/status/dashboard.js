function autorefresh() {
  //setInterval("refresh()", 1000.*60.*5.);
}

function refresh() {
  // TODO / FIXME - retrieve and update the components only
  /*if (document.getElementById("clusterStatus") != null) {

    xmlhttp=new XMLHttpRequest();

    xmlhttp.open("GET", "computeNodeActivity.svg",true);
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4) {
        parser = new DOMParser();
        fragment = parser.parseFromString(this.responseText, "text/xml");
        fragmentRoot = fragment.documentElement
        newNodeActivity = document.importNode(fragmentRoot, true);
        clusterStatusNode = document.getElementById("clusterStatus");
        statusContainer = clusterStatusNode.parentElement;
        statusContainer.appendChild(newNodeActivity);
        statusContainer.removeChild(clusterStatusNode);
      }
    }

    xmlhttp.send(null)

  }*/
}

function reset() {
  for (g=0;g< groups.length;g++) {
    groupName = groups[g];
    elements = document.getElementsByClassName(groupName);

    for (i=0;i<elements.length;i++) {
      element = elements[i];

      element.setAttribute("opacity", "1.0");
    }
  }
}

function highlightJob(jobID) {
  elements = document.getElementsByClassName("glowOverlay");

  for (i=0;i<elements.length;i++) {
    element = elements[i];

    elementJobID = element.getAttribute("jobID");

    if (elementJobID == jobID) {
      element.style.setProperty("visibility", "visible");
    } else {
      element.style.setProperty("visibility", "hidden");
    }
  }
}
