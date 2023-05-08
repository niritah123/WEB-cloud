function handleCheckbox() {
    let checked = $("input[type=checkbox]:checked").length;
  
    if (checked < 2) {
      alert("You must check at least 2 interests.");
      return false;
    }
    return true;
  }