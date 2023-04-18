<template>
    <div class="audio-player">
      <button @click="playAudio">Play Audio</button>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      playAudio() {
        const audio = new Audio(require('@/assets/audio/sample.mp3'));
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
  