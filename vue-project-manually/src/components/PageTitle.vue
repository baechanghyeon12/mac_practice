<template>
  <h2>{{ title }}</h2>
  <!--
    ref/refs 속성은 부모가 자식에게 관여
    ref 속성은 컴포넌트가 랜더링이 된 이후 적용되기 때문에 반응형으로 구성하기 위한 computed 나 template 에서 사용하면 안됨
  -->
  <!--
    $emit 속성은 자식이 부모에게 관여
  -->
  <button type="button" @click="childFunc" ref="btn">부모컴포에서 자식컴포 실행 시키기</button>
</template>
<script>
export default {
  name:'',
  props: {
    title: {
        type: String,
        default: "페이지 제목입니다."
      }
  },
  methods: {
    childFunc() {
      console.log('부모 컴포넌트에서 직접 발생시킨 이벤트')
    }
  }
}
</script>