<template>
    <div class="card card-success card-outline">
        <!-- <div class="card-header">
          <h3 class="card-title"></h3>
        </div> -->
        <!-- /.card-header -->
        <div class="card-body">
            <table id="units" class="table dataTable display responsive nowrap dataTable no-footer dtr-inline collapsed table-hover">
                <thead>
                    <tr>
                        <th>Units</th>
                        <th>Description</th>
                        <th>Shortform</th>
                        <th>Physical</th>
                        <th>Factor</th>
                        <th>Basic Unity</th>
                        <th>Block</th>
                        <th class="text-center no-sort">Action</th>
                        <th class="rowlink-skip dt-body-center no-sort"><a class="btn btn-danger btn-sm" style="padding: 0px 6px;" title="Delete"><i class="fas fa-trash-alt fa-xs text-white"></i></a></th>
                    </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                    <tr v-for="units in unit">
                        <td><a href="#">{{$unit.unid}}</a></td>
                        <td>{{unit.dsca}}
                        </td>
                        <td>{{unit.dscs}}</td>
                        <td>
                            
                        </td>
                        <td>{{unit.conv}}</td>
                        <td>{{unit.basu}}</td>
                        <td>{{unit.crnd}}</td>
                        <td class="text-center rowlink-skip">
                            <a href="#editModal" class="btn btn-warning btn-sm editModalBtn" style="height: 23px; padding: 0px 6px;"><i class="fas fa-pencil-alt fa-xs"></i></a>
                        </td>
                        <td class="rowlink-skip"></td>
                    </tr>
                </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                units: [],
                endpoint: '/common/basicSettings/units/all'
            };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch() {
                axios.get(this.endpoint)
                    .then(({data}) => {
                        //console.log(data.data);
                        this.units = data.data;
                        //console.log(this.units);
                });
            }
        }
    }
</script>
