<template>
    <div class="audio-player">
      <button @click="playAudio">Play Audio</button>
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
  