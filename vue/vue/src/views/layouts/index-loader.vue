<template>
    <div>
        <div class="preloader" ref="preloader">
            <span class="loader"></span>
        </div>
        <!-- Your other content here -->
    </div>
</template>

<script>
export default {
  mounted() {
    // Your JavaScript code goes here
    this.setupPreloader();
  },
  methods: {
    setupPreloader() {
      setTimeout(() => {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
          setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
              preloader.style.display = 'none';
            }, 500);
          }, 500);
        }
      }, 500);
    }
  }
}
</script>