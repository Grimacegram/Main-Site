//THIS IS A TEST CHANGE                 THIS
const video = document.getElementById('video');
const videoControls = document.getElementById('video-controls');

const videoWorks = !!document.createElement('video').canPlayType;
if(videoWorks){
    video.controls = false;
    videoControls.classList.remove('hidden');
}

const playButton = document.getElementById('play');

//add functions here


//toggle playbttn the playback state of the video
// If the video playback is paused or ended, the video is played
// otherwise, the video is paused

function togglePlay(){
    if(video.paused || video.ended){
        video.play();
    } else {
        video.pause();
    }
}

//eventListeners here

playButton.addEventListener('click', togglePlay);

video.addEventListener('play', updatePlayButton);
video.addEventListener('pause', updatePlayButton)

//buttons
const playbackIcons = document.querySelectorAll('.playback-icon use');

//updatePlayButton updates the play back icon

function updatePlayButton() {
    playbackIcons.forEach(icon => icon.classList.toggle('hidden'));
}

function updatePlayButton() {
    playbackIcons.forEach(icon => icon.classList.toggle('hidden'));

    if (video.paused){
        playButton.setAttribute('data-title', 'Play (k)');
    } else{
        playButton.setAttribute('data-title', 'Pause (k)');
    }
}

//Time
const timeElapsed = document.getElementById('time-elapsed');
const duration = document.getElementById('duration');

function formatTime(timeInSeconds){
    const result = new Date(timeInSeconds * 1000).toISOString().substr(11, 8);

    return {
        minutes: result.substr(3, 2),
        seconds: result.substr(6, 2),
    };
};

// If the video playback is paused or ended, the video is played
// otherwise, the video is paused
function initializeVideo(){
    const videoDuration = Math.round(video.duration);
    const time = formatTime(videoDuration);
    duration.innerText = `${time.minutes}:${time.seconds}`;
    duration.setAttribute('datetime', `${time.minutes}m ${time.seconds}s`)
}

video.addEventListener('loadedmetadata', initializeVideo);

// updateTimeElapsed indicates how far through the video
// the current playback is
function updateTimeElapsed() {
    const time = formatTime(Math.round(video.currentTime));
    timeElapsed.innerText = `${time.minutes}:${time.seconds}`;
    timeElapsed.setAttribute('date', `${time.minutes}m ${time.seconds}s`)
}

video.addEventListener('timeupdate', updateTimeElapsed);

const progressBar = document.getElementById('progress-bar');
const seek = document.getElementById('seek');

function initializeVideo(){
    const videoDuration = Math.round(video.duration);
    seek.setAttribute('max', videoDuration);
    progressBar.setAttributeNS('max', videoDuration);
    const time = formatTime(videoDuration);
    duration.innerText = `${time.minutes}:${time.seconds}`;
    duration.setAttribute('datetime', `${time.minutes}m ${time.seconds}s`);
}

function updateProgress() {
    seek
}