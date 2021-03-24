function enableFields(buttonId) {
  var x = document.getElementById(buttonId);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function addSkillFields() {
  document.getElementById('skills').innerHTML += '<br /> <input name="input_skill[]" class="form-control" type="text" placeholder="Enter Skill">\r\n';
}

function addAchievementFields() {
  document.getElementById('achievements').innerHTML += '<br /> <input name="input_achievement[]" class="form-control" type="text" placeholder="Enter Achivement">\r\n';
}

function addWorkExp() {

  const div = document.createElement('div');

    div.className = 'row';

    div.innerHTML = `
      <h4 class="title">Experience</h4>
      <div id="work" class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Timeline</h4>
          <input name="input_timeline[]" class="form-control" type="text" placeholder="Enter Timeline">
          <h4 class="title">Title</h4>
          <input name="input_title[]" class="form-control" type="text" placeholder="Enter Title">
          <h4 class="title">Organization</h4>
          <input name="input_organization[]" class="form-control" type="text" placeholder="Enter Organization">
          <h4 class="title">Work Description</h4>
          <textarea name="input_work_desc[]" class="form-control" type="text" rows="5"></textarea>
        </div>
      </div>
    `;

    document.getElementById('work').appendChild(div);

}
