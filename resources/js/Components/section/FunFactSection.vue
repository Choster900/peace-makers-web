<template>
  <section class="fun-fact-section" :class="{ 'bg-gray': isBg }">
    <div class="container">
      <div class="row g-gs">
        <div class="col-md-4" v-for="item in items" :key="item.id" :class="classname">
          <div class="card card-counter text-center">
            <div class="card-body card-body-s1">
              <img :src="item.icon" alt="" class="mb-3">
              <h3 class="mb-1">{{ item.title }}</h3>
              <p>{{ item.subTitle }}</p>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end fun-fact-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

export default {
  name: 'FunFactSection',
  props: ['isBg', 'classname', 'items'],
  data() {
    return {
      SectionData: {
        //funfactData
        funfactData: {
          funfactList: [
            {
              id: 1,
              title: 'Over 400+',
              subTitle: 'Total Members'
            },
            {
              id: 2,
              title: 'Over 40+',
              subTitle: 'Total Countries'
            },
            {
              id: 3,
              title: 'Over 1000+',
              subTitle: 'Total NFTs'
            }
          ],
          funfactListTwo: [
            {
              id: 1,
              title: '2015',
              subTitle: 'Founded'
            },
            {
              id: 2,
              title: '68',
              subTitle: 'Employees'
            },
            {
              id: 3,
              title: '400K+',
              subTitle: 'Users'
            },
            {
              id: 4,
              title: '1M',
              subTitle: 'Collections'
            },
            {
              id: 5,
              title: '24M+',
              subTitle: 'NFTs'
            },
            {
              id: 6,
              title: '$2B+',
              subTitle: 'Volume'
            }
          ]

        },
      }
    }
  }
}
</script>
