<template>
    <div class="audio-player">
      <button @click="testBackend">Play Audio</button>
    </div>
  </template>
  
  <script>
  import sampleAudio from '@/assets/audio/sample.mp3';

  export default {
    methods: {
        playAudio() {
            const audio = new Audio(sampleAudio);
            audio.play();
        },
        async playRemoteAudio() {
            const filename = 'sample.mp3'; // Replace this with the desired filename from the S3 bucket
            try {
                const response = await fetch(`http://your-laravel-api-url/api/audio/${filename}`);
                const audioUrl = await response.text();

                const audio = new Audio(audioUrl);
                audio.play();
            } catch (error) {
                console.error('Error fetching audio URL:', error);
            }
        },
        async testBackend() {
            const response = await fetch('http://localhost:8000/api/audio/sample');
            const data = await response.json();
            console.log(data);
        }
    },
  };
  </script>
  
  <style scoped>
  .audio-player {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  </style>
  