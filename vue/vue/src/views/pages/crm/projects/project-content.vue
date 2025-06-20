<template>
  <div class="col-xxl-3 col-xl-4 col-md-6" v-for="item in ContactGrid" :key="item.id">
	<div class="card border">
		<div class="card-body">
			<div class="d-flex align-items-center justify-content-between mb-3">
				<div class="d-flex align-items-center">
					<span class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
					<span class="badge bg-success">Active</span>
				</div>
				<span class="avatar avatar-xs rounded-circle border">
					<i class="fa-solid fa-star text-warning"></i>
				</span>
			</div>
			<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
				<div class="d-flex align-items-center">
					<router-link to="/crm/project-details" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
						<img :src="require(`@/assets/img/priority/${item.pro_img}`)" class="w-auto h-auto" alt="img">
					</router-link>
					<div>
						<h5 class="fw-semibold"><router-link to="/crm/project-details">{{item.name}}</router-link></h5>
						<p>{{ item.type }}</p>
					</div>
				</div>
				<div class="dropdown table-action">
					<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-ellipsis-v"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
						<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="ti ti-trash text-danger"></i> Delete</a>
						<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> Clone this Project</a>
						<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
						<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-subtask"></i> Add New Task</a>
					</div>
				</div>
			</div>
			<div class="d-block">
				<p class="mb-3">Kofejob is a freelancers marketplace where you can post projects &amp; get instant help.</p>
				<div class="mb-3">
					<p class="d-flex align-items-center mb-2"><i class="ti ti-forbid-2 me-2"></i>Project ID : {{ item.id }}</p>
					<p class="d-flex align-items-center mb-2"><i class="ti ti-report-money me-2"></i>Value : {{ item.value }}</p>
					<p class="d-flex align-items-center mb-2"><i class="ti ti-calendar-exclamation me-2"></i>Due Date : {{ item.end_date }}</p>
				</div>
				<div class="d-flex align-items-center justify-content-between mb-3">
					<div class="avatar-list-stacked avatar-group-xs">
						<span class="avatar avatar-rounded">
							<img class="border border-white" :src="require(`@/assets/img/profiles/${item.mem_image1}`)" alt="img">
						</span>
						<span class="avatar avatar-rounded">
							<img class="border border-white" :src="require(`@/assets/img/profiles/${item.mem_image2}`)" alt="img">
						</span>
						<span class="avatar avatar-rounded">
							<img :src="require(`@/assets/img/profiles/${item.mem_image3}`)" alt="img">
						</span>
						<a class="avatar text-default bg-white border avatar-rounded fs-12" href="javascript:void(0);">
							+05
						</a>
					</div>
					<div class="d-flex align-items-center">
						<span class="avatar avatar-sm border flex-shrink-0 me-2">
							<img :src="require(`@/assets/img/icons/${item.client_img}`)" class="w-auto h-auto" alt="img">
						</span>
						<p>{{ item.client }}</p>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-between align-items-center pt-3 border-top">
				<span class="badge badge-sm bg-soft-purple text-purple"><i class="ti ti-clock-stop me-2"></i>Total Hours : {{ item.hrs }}</span>
				<div class="d-flex align-items-center">
					<span class="d-inline-flex align-items-center me-2"><i class="ti ti-brand-wechat me-1"></i>02</span>
					<span class="d-inline-flex align-items-center"><i class="ti ti-subtask me-1"></i>04</span>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
import ContactGrid from "@/assets/json/projects.json";
export default {
  data() {
    return {
      ContactGrid: ContactGrid,
    };
  },
};
</script>