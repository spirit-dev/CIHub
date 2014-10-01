$(document).ready(function () {
    projectWatch();
});

function projectWatch() {
    console.log('Project watch');
    $('.postci-project').click(function () {
        var projId = this.id;
        console.log('Project watching project ' + projId);
        loadProjectDatas();
    });
}

function loadProjectDatas() {
    console.log(PROJECTS);
}