<template>
  <div>
    <!-- <PageTitle title="하고자 하는 사람은 방법을 찾고 그렇지 않은 사람은 핑계를 찾는다."/> -->
    <PageTitle :title="title"/>
    <PageTitle @send-message="sendMessage" ref="child_component"/>
  </div>
</template>
<script>
// 현재 컴포넌트에서 다른 컴포넌트를 사용하려면 import한 후에 현재 컴포넌트의 템플릿에서 사용할 컴포넌트를 components에 등록하면 된다.
import PageTitle from '@/components/PageTitle.vue'; // 컴포넌트 import
export default {
  name:'',
  components: {PageTitle}, // 현재 컴포넌트에서 사용할 컴포넌트 등록 
  mounted(){
    this.$refs.child_component.$refs.btn.click();
  },
  data() {
    return {
      title: '동적 페이지 타이틀'
    };
  }
}
</script>