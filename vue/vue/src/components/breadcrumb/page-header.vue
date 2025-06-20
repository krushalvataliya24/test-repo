<template>
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col-8">
        <h4 class="page-title">{{ title }}<span class="count-title">123</span></h4>
      </div>
      <div class="col-4 text-end">
        <div class="head-icons">
          <a
            href="javascript:void(0);"
            @click="toggleLoad"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-original-title="Refresh"
            ><i class="ti ti-refresh-dot"></i
          ></a>
          <a
            href="javascript:void(0);"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-original-title="Collapse"
            id="collapse-header"
            @click="toggleHeader"
            ><i class="ti ti-chevrons-up"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    toggleHeader() {
      document.getElementById("collapse-header").classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    },
    toggleLoad() {
      location.reload();
    },
  },
  props: {
    title: String,
  },
};
</script>
