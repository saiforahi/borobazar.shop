<template>
    <div class="header-btns-icon">
		  <i class="bsquare fa fa-bell-o"></i>
		  <span class="count" v-if="notification_number>0">{{notification_number}}</span>
    </div>
</template>

<script>
export default {
    props:['notification_number']
}
</script>