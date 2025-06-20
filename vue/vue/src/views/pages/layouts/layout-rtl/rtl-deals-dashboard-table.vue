<template>
    <table class="table dataTable" id="deals-project">
        <thead class="thead-light">
            <tr>
                <th>Deal Name</th>
                <th>Stage</th>
                <th>Deal Value</th>
                <th>Probability</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in DealsTable" :key="item.id">
                <td>{{item.deal_name}}</td>
                <td>{{item.stage}}</td>
                <td>{{item.deal_value}}</td>
                <td>{{item.probability}}</td>
                <td><span :class="item.statusclass">{{item.status}}</span></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import DealsTable from '@/assets/json/deals-project.json'
export default {
    data() {
        return {
            DealsTable: DealsTable
        }
    },
}
</script>