<template>
    <div class="modal" :class="{ 'is-active': showModal }">
      <div class="modal-background" @click="closeModal"></div>
      <div class="modal-content">
        <div class="box">
          <h1>{{ modalTitle }}</h1>
          <div v-html="modalContent"></div>
        </div>
      </div>
      <button class="modal-close is-large" aria-label="close" @click="closeModal"></button>
    </div>
  </template>
  
  <script>
  export default {
    props: ['showModal', 'modalTitle', 'modalContent'],
    methods: {
      closeModal() {
        this.$emit('close');
      }
    }
  }
  </script>
  
  <style scoped>
  .modal {
    display: none;
  }
  
  .modal.is-active {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .modal-background {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
  }
  
  .modal-content {
    max-width: 800px;
  }
  
  .modal-close {
    position: absolute;
    top: 15px;
    right: 15px;
    cursor: pointer;
  }
  </style>
  