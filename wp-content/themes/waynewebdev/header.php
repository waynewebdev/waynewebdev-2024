<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div class="wam-main-content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pressable
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

      <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport"
                  content="width=device-width, initial-scale=1, shrink-to-fit=no">


            <?php wp_head(); ?>
      </head>

      <body <?php body_class('bg-gradient-4 bg-fixed'); ?>>
            <div class="glow-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wayne-really-blurry.png"
                       alt="Wayne Alan McWilliams"
                       class="wwd-headshot" />
                  <div class="glowball"></div>
                  <div class="glowball"
                       style="--delay:-5s;--size:0.15;--speed:35s;"></div>
                  <div class="glowball"
                       style="--delay:-12s;--size:0.35;--speed:25s;"></div>
                  <div class="glowball"
                       style="--delay:-10s;--size:0.3;--speed:15s;"></div>

            </div>
            <a href="#main-content"
               class="skip-link">Skip to main content</a>

            <main id="main-content"
                  class="cd-main-content">
                  <div class="wwd-left-sidebar">
                        <div class="wwd-logo">
                              <svg id="Layer_2"
                                   xmlns="http://www.w3.org/2000/svg"
                                   viewBox="0 0 329.14 72.89">
                                    <defs>
                                          <style>
                                                .cls-1 {
                                                      opacity: .7;
                                                }


                                                .cls-2 {
                                                      opacity: .4;
                                                }

                                                .cls-3 {
                                                      opacity: .2;
                                                }

                                                .cls-4 {
                                                      opacity: .05;
                                                }
                                          </style>
                                    </defs>

                                    <g id="Layer_1-2"
                                       data-name="Layer_1">
                                          <g id="wwd-logo">

                                                <g id="wwd-fifth"
                                                   class="cls-4">
                                                      <path
                                                            d="M39.93,16.23c-1.69,0-3.58,3.58-2.69,11.95,1.89,18.12,15.14,44.71-3.68,44.71-6.87,0-9.86-3.59-11.25-7.47L0,1.59h14.24l20.41,58.35c.2.7.9,2.99,2.79,2.99,9.66,0-19.42-62.93,3.88-62.93,2.59,0,8.46.8,11.75,10.36l17.33,49.59c.2.7.9,2.99,3.29,2.99,10.56,0-.2-44.61,13.14-61.34h13.64l-11.85,33.86c-5.88 ,16.63-11.95,37.44-22.31,37.44-3.88,0-6.67-2.99-8.07-6.87l-16.73-48.2c-.4-1.1-1-1.59-1.59-1.59Z" />
                                                      <path
                                                            d="M92.41,71.3c-4.18,0-5.88-2.59-4.28-6.47L111.83,6.87c1.49-3.78,4.68-6.27,8.86-6.27s7.27,2.49,8.76,6.27l23.2,57.96c1.59,3.88-.2,6.47-4.38,6.47h-55.86ZM121.49,22.6c-.4-1.1-1.39-1.1-1.79,0-4.98,12.05-7.67,18.82-12.65,30.87-7.07,17.23,22.11,16.23,31.07,15.93,1.19-.1,1.69-.8,1.29-1.99l-17.92-44.81Z" />
                                                      <path
                                                            d="M176.75,62.63c0,8.07-6.27,10.06-9.76,10.06-5.88,0-10.56-5.58-10.56-16.73,0-9.16,3.19-19.82-3.68-30.47l-15.43-23.9h16.03l9.36,14.44c5.38,8.27-3.98,24.2-3.98,36.05,0,4.68,1.49,6.67,2.69,6.67,1,0,1.89-1.2,1.89-3.19v-8.76c0-6.77,2.49-15.04,6.17-20.71L185.52,1.59h16.13l-21.11,32.2 6c-2.29,3.58-3.78,8.66-3.78,12.85v15.93Z" />
                                                      <path
                                                            d="M211.21.8c43.02,0,14.54,69.9,30.47,69.9,3.78,0,4.68-3.98,4.68-5.97V1.59h13.44v47.3c0,8.96-1.49,23.8-21.01,23.8-12.45,0-17.92-5.97-17.92-16.43,0-13.34,8.86-23.8,8.86-35.15,0-8.46-4.98-17.33-11.85-17.33-1.89,0-2.29.7-2.29,2.59v64.93h-13.44V7.77c0-4.18,2.79-6.97,6.97-6.97h2.09Z" />
                                                      <path
                                                            d="M289.08,58.85h32.06v12.45h-38.54c-10.75,0-17.33-6.97-17.33-17.23,0-26.19,43.32-17.43,43.32-21.21s-43.32-2.39-43.32-19.52c0-7.17,7.67-11.75,19.52-11.75h36.35v12.45h-28.78c-5.78,0-16.53-.4-16.53,5.08,0,11.05,42.72,4.68,42.72,19.52,0,9.66-18.02,8.66-32.56,8.66-10.06,0-18.52.5-18.52,5.28,0,5.28,10.26,6.27,21.61,6.27Z" />
                                                </g>

                                                <g id="wwd-fourth"
                                                   class="cls-3">
                                                      <path
                                                            d="M41.93,16.23c-1.69,0-3.58,3.58-2.69,11.95,1.89,18.12,15.14,44.71-3.68,44.71-6.87,0-9.86-3.59-11.25-7.47L2,1.59h14.24l20.41,58.35c.2.7.9,2.99,2.79,2.99,9.66,0-19.42-62.93,3.88-62.93,2.59,0,8.46.8,11.75,10.36l17.33,49.59c.2.7.9,2.99,3.29,2.99,10.56,0-.2-44.61,13.14-61.34h13.64l-11.85,33.86c-5.88 ,16.63-11.95,37.44-22.31,37.44-3.88,0-6.67-2.99-8.07-6.87l-16.73-48.2c-.4-1.1-1-1.59-1.59-1.59Z" />
                                                      <path
                                                            d="M94.41,71.3c-4.18,0-5.88-2.59-4.28-6.47L113.83,6.87c1.49-3.78,4.68-6.27,8.86-6.27s7.27,2.49,8.76,6.27l23.2,57.96c1.59,3.88-.2,6.47-4.38,6.47h-55.86ZM123.49,22.6c-.4-1.1-1.39-1.1-1.79,0-4.98,12.05-7.67,18.82-12.65,30.87-7.07,17.23,22.11,16.23,31.07,15.93,1.19-.1,1.69-.8,1.29-1.99l-17.92-44.81Z" />
                                                      <path
                                                            d="M178.75,62.63c0,8.07-6.27,10.06-9.76,10.06-5.88,0-10.56-5.58-10.56-16.73,0-9.16,3.19-19.82-3.68-30.47l-15.43-23.9h16.03l9.36,14.44c5.38,8.27-3.98,24.2-3.98,36.05,0,4.68,1.49,6.67,2.69,6.67,1,0,1.89-1.2,1.89-3.19v-8.76c0-6.77,2.49-15.04,6.17-20.71L187.52,1.59h16.13l-21.11,32.2 6c-2.29,3.58-3.78,8.66-3.78,12.85v15.93Z" />
                                                      <path
                                                            d="M213.21.8c43.02,0,14.54,69.9,30.47,69.9,3.78,0,4.68-3.98,4.68-5.97V1.59h13.44v47.3c0,8.96-1.49,23.8-21.01,23.8-12.45,0-17.92-5.97-17.92-16.43,0-13.34,8.86-23.8,8.86-35.15,0-8.46-4.98-17.33-11.85-17.33-1.89,0-2.29.7-2.29,2.59v64.93h-13.44V7.77c0-4.18,2.79-6.97,6.97-6.97h2.09Z" />
                                                      <path
                                                            d="M291.08,58.85h32.06v12.45h-38.54c-10.75,0-17.33-6.97-17.33-17.23,0-26.19,43.32-17.43,43.32-21.21s-43.32-2.39-43.32-19.52c0-7.17,7.67-11.75,19.52-11.75h36.35v12.45h-28.78c-5.78,0-16.53-.4-16.53,5.08,0,11.05,42.72,4.68,42.72,19.52,0,9.66-18.02,8.66-32.56,8.66-10.06,0-18.52.5-18.52,5.28,0,5.28,10.26,6.27,21.61,6.27Z" />
                                                </g>

                                                <g id="wwd-third"
                                                   class="cls-2">
                                                      <path
                                                            d="M43.93,16.23c-1.69,0-3.58,3.58-2.69,11.95,1.89,18.12,15.14,44.71-3.68,44.71-6.87,0-9.86-3.59-11.25-7.47L4,1.59h14.24l20.41,58.35c.2.7.9,2.99,2.79,2.99,9.66,0-19.42-62.93,3.88-62.93,2.59,0,8.46.8,11.75,10.36l17.33,49.59c.2.7.9,2.99,3.29,2.99,10.56,0-.2-44.61,13.14-61.34h13.64l-11.85,33.86c-5.88 ,16.63-11.95,37.44-22.31,37.44-3.88,0-6.67-2.99-8.07-6.87l-16.73-48.2c-.4-1.1-1-1.59-1.59-1.59Z" />
                                                      <path
                                                            d="M96.41,71.3c-4.18,0-5.88-2.59-4.28-6.47L115.83,6.87c1.49-3.78,4.68-6.27,8.86-6.27s7.27,2.49,8.76,6.27l23.2,57.96c1.59,3.88-.2,6.47-4.38,6.47h-55.86ZM125.49,22.6c-.4-1.1-1.39-1.1-1.79,0-4.98,12.05-7.67,18.82-12.65,30.87-7.07,17.23,22.11,16.23,31.07,15.93,1.19-.1,1.69-.8,1.29-1.99l-17.92-44.81Z" />
                                                      <path
                                                            d="M180.75,62.63c0,8.07-6.27,10.06-9.76,10.06-5.88,0-10.56-5.58-10.56-16.73,0-9.16,3.19-19.82-3.68-30.47l-15.43-23.9h16.03l9.36,14.44c5.38,8.27-3.98,24.2-3.98,36.05,0,4.68,1.49,6.67,2.69,6.67,1,0,1.89-1.2,1.89-3.19v-8.76c0-6.77,2.49-15.04,6.17-20.71L189.52,1.59h16.13l-21.11,32.2 6c-2.29,3.58-3.78,8.66-3.78,12.85v15.93Z" />
                                                      <path
                                                            d="M215.21.8c43.02,0,14.54,69.9,30.47,69.9,3.78,0,4.68-3.98,4.68-5.97V1.59h13.44v47.3c0,8.96-1.49,23.8-21.01,23.8-12.45,0-17.92-5.97-17.92-16.43,0-13.34,8.86-23.8,8.86-35.15,0-8.46-4.98-17.33-11.85-17.33-1.89,0-2.29.7-2.29,2.59v64.93h-13.44V7.77c0-4.18,2.79-6.97,6.97-6.97h2.09Z" />
                                                      <path
                                                            d="M293.08,58.85h32.06v12.45h-38.54c-10.75,0-17.33-6.97-17.33-17.23,0-26.19,43.32-17.43,43.32-21.21s-43.32-2.39-43.32-19.52c0-7.17,7.67-11.75,19.52-11.75h36.35v12.45h-28.78c-5.78,0-16.53-.4-16.53,5.08,0,11.05,42.72,4.68,42.72,19.52,0,9.66-18.02,8.66-32.56,8.66-10.06,0-18.52.5-18.52,5.28,0,5.28,10.26,6.27,21.61,6.27Z" />
                                                </g>

                                                <g id="wwd-second"
                                                   class="cls-1">
                                                      <path
                                                            d="M45.93,16.23c-1.69,0-3.58,3.58-2.69,11.95,1.89,18.12,15.14,44.71-3.68,44.71-6.87,0-9.86-3.59-11.25-7.47L6,1.59h14.24l20.41,58.35c.2.7.9,2.99,2.79,2.99,9.66,0-19.42-62.93,3.88-62.93,2.59,0,8.46.8,11.75,10.36l17.33,49.59c.2.7.9,2.99,3.29,2.99,10.56,0-.2-44.61,13.14-61.34h13.64l-11.85,33.86c-5.88 ,16.63-11.95,37.44-22.31,37.44-3.88,0-6.67-2.99-8.07-6.87l-16.73-48.2c-.4-1.1-1-1.59-1.59-1.59Z" />
                                                      <path
                                                            d="M98.41,71.3c-4.18,0-5.88-2.59-4.28-6.47L117.83,6.87c1.49-3.78,4.68-6.27,8.86-6.27s7.27,2.49,8.76,6.27l23.2,57.96c1.59,3.88-.2,6.47-4.38,6.47h-55.86ZM127.49,22.6c-.4-1.1-1.39-1.1-1.79,0-4.98,12.05-7.67,18.82-12.65,30.87-7.07,17.23,22.11,16.23,31.07,15.93,1.19-.1,1.69-.8,1.29-1.99l-17.92-44.81Z" />
                                                      <path
                                                            d="M182.75,62.63c0,8.07-6.27,10.06-9.76,10.06-5.88,0-10.56-5.58-10.56-16.73,0-9.16,3.19-19.82-3.68-30.47l-15.43-23.9h16.03l9.36,14.44c5.38,8.27-3.98,24.2-3.98,36.05,0,4.68,1.49,6.67,2.69,6.67,1,0,1.89-1.2,1.89-3.19v-8.76c0-6.77,2.49-15.04,6.17-20.71L191.52,1.59h16.13l-21.11,32.2 6c-2.29,3.58-3.78,8.66-3.78,12.85v15.93Z" />
                                                      <path
                                                            d="M217.21.8c43.02,0,14.54,69.9,30.47,69.9,3.78,0,4.68-3.98,4.68-5.97V1.59h13.44v47.3c0,8.96-1.49,23.8-21.01,23.8-12.45,0-17.92-5.97-17.92-16.43,0-13.34,8.86-23.8,8.86-35.15,0-8.46-4.98-17.33-11.85-17.33-1.89,0-2.29.7-2.29,2.59v64.93h-13.44V7.77c0-4.18,2.79-6.97,6.97-6.97h2.09Z" />
                                                      <path
                                                            d="M295.08,58.85h32.06v12.45h-38.54c-10.75,0-17.33-6.97-17.33-17.23,0-26.19,43.32-17.43,43.32-21.21s-43.32-2.39-43.32-19.52c0-7.17,7.67-11.75,19.52-11.75h36.35v12.45h-28.78c-5.78,0-16.53-.4-16.53,5.08,0,11.05,42.72,4.68,42.72,19.52,0,9.66-18.02,8.66-32.56,8.66-10.06,0-18.52.5-18.52,5.28,0,5.28,10.26,6.27,21.61,6.27Z" />
                                                </g>
                                                <g id="wwd-first">
                                                      <path
                                                            d="M47.93,16.23c-1.69,0-3.58,3.58-2.69,11.95,1.89,18.12,15.14,44.71-3.68,44.71-6.87,0-9.86-3.59-11.25-7.47L8,1.59h14.24l20.41,58.35c.2.7.9,2.99,2.79,2.99,9.66,0-19.42-62.93,3.88-62.93,2.59,0,8.46.8,11.75,10.36l17.33,49.59c.2.7.9,2.99,3.29,2.99,10.56,0-.2-44.61,13.14-61.34h13.64l-11.85,33.86c-5.88, 16.63-11.95,37.44-22.31,37.44-3.88,0-6.67-2.99-8.07-6.87l-16.73-48.2c-.4-1.1-1-1.59-1.59-1.59Z" />
                                                      <path
                                                            d="M100.41,71.3c-4.18,0-5.88-2.59-4.28-6.47L119.83,6.87c1.49-3.78,4.68-6.27,8.86-6.27s7.27,2.49,8.76,6.27l23.2,57.96c1.59,3.88-.2,6.47-4.38,6.47h-55.86ZM129.49,22.6c-.4-1.1-1.39-1.1-1.79,0-4.98,12.05-7.67,18.82-12.65,30.87-7.07,17.23,22.11,16.23,31.07,15.93,1.19-.1,1.69-.8,1.29-1.99l-17.92-44.81Z" />
                                                      <path
                                                            d="M184.75,62.63c0,8.07-6.27,10.06-9.76,10.06-5.88,0-10.56-5.58-10.56-16.73,0-9.16,3.19-19.82-3.68-30.47l-15.43-23.9h16.03l9.36,14.44c5.38,8.27-3.98,24.2-3.98,36.05,0,4.68,1.49,6.67,2.69,6.67,1,0,1.89-1.2,1.89-3.19v-8.76c0-6.77,2.49-15.04,6.17-20.71L193.52,1.59h16.13l-21.11,32.2 6c-2.29,3.58-3.78,8.66-3.78,12.85v15.93Z" />
                                                      <path
                                                            d="M219.21.8c43.02,0,14.54,69.9,30.47,69.9,3.78,0,4.68-3.98,4.68-5.97V1.59h13.44v47.3c0,8.96-1.49,23.8-21.01,23.8-12.45,0-17.92-5.97-17.92-16.43,0-13.34,8.86-23.8,8.86-35.15,0-8.46-4.98-17.33-11.85-17.33-1.89,0-2.29.7-2.29,2.59v64.93h-13.44V7.77c0-4.18,2.79-6.97,6.97-6.97h2.09Z" />
                                                      <path
                                                            d="M297.08,58.85h32.06v12.45h-38.54c-10.75,0-17.33-6.97-17.33-17.23,0-26.19,43.32-17.43,43.32-21.21s-43.32-2.39-43.32-19.52c0-7.17,7.67-11.75,19.52-11.75h36.35v12.45h-28.78c-5.78,0-16.53-.4-16.53,5.08,0,11.05,42.72,4.68,42.72,19.52,0,9.66-18.02,8.66-32.56,8.66-10.06,0-18.52.5-18.52,5.28,0,5.28,10.26,6.27,21.61,6.27Z" />
                                                </g>
                                          </g>
                                    </g>
                              </svg>
                        </div>
                        <div class="test-box primary"></div>
                        <div class="test-box secondary"></div>
                        <div class="test-box accent"></div>
                        <div class="test-box bg"></div>
                        <div class="test-box text"></div>


                        <div class="aura-explanation blue-aura-show">
                              <span><strong>Blue Aura - "Clarity in Every Pixel"</strong></span>
                              <p class="aura-description">My work embodies calm and clarity, like the tranquility
                                    of a
                                    blue sky. I prioritize intuitive interfaces, anticipating user needs to
                                    deliver
                                    smooth, stress-free experiences. Every interaction is crafted to feel
                                    effortless and
                                    natural, putting users at ease while guiding them seamlessly through each
                                    journey.
                              </p>
                        </div>

                        <div class="aura-explanation green-aura-show">
                              <span><strong>Green Aura - "Design with Empathy"</strong></span>
                              <p class="aura-description">Green represents growth, harmony, and empathy. My
                                    approach to
                                    UI/UX centers on inclusivity and accessibility, ensuring every user feels seen
                                    and
                                    valued. I create balanced designs that resonate across diverse audiences,
                                    building
                                    interfaces that grow with their users and provide a universally welcoming
                                    experience.</p>
                        </div>
                        <div class="aura-explanation yellow-aura-show">
                              <span><strong>Yellow Aura - "Brilliance in Every Solution"</strong></span>
                              <p class="aura-description">Yellow captures the essence of creativity and logic. My
                                    designs are both innovative and grounded, finding fresh ways to simplify
                                    complex
                                    processes. With an optimistic approach to challenges, I turn limitations into
                                    opportunities, always aiming to bring a spark of joy and innovation to the
                                    user
                                    experience.</p>
                        </div>
                        <div class="aura-explanation purple-aura-show">
                              <span><strong>Purple Aura - "Visionary User Experiences"</strong></span>
                              <p class="aura-description">Purple signifies imagination and transformation. I
                                    approach
                                    UX/UI with a visionary mindset, reinventing interactions to create experiences
                                    that
                                    are not only functional but also memorable. Each project is an opportunity to
                                    transform ideas into impactful, captivating realities, bridging the gap
                                    between
                                    technology and user delight.</p>
                        </div>
                        <div class="aura-explanation red-aura-show">
                              <span><strong>Red Aura - "Passion-Fueled Design"</strong></span>
                              <p class="aura-description">Red is the color of passion and action. I bring energy
                                    and
                                    decisiveness to my work, especially in fast-paced, high-stakes environments.
                                    Every
                                    design is built to inspire and engage, leaving a lasting impact on users. I
                                    thrive
                                    on delivering powerful, impactful experiences that connect deeply with their
                                    audience.</p>
                        </div>
                        <div class="aura-explanation white-aura-show">
                              <span><strong>White/Silver Aura - "Pure, Focused Innovation"</strong></span>
                              <p class="aura-description">White and silver symbolize purity and focus. My designs
                                    embrace minimalism and clarity, creating intuitive interfaces that cut through
                                    complexity. I’m committed to innovation through simplicity, ensuring every
                                    element
                                    serves a purpose, guiding users effortlessly through a focused, streamlined
                                    experience.</p>
                        </div>


                  </div>

                  </div>
                  <div class="wwd-main-content">
                        <!-- <div class="wwd-hero">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wayne-really-blurry.png"
                                   alt="Wayne Alan McWilliams"
                                   class="wwd-headshot" />

                              <div class="text-container">


                                    <h1>Hello</h1>


                              </div>
                              <div class="gradient-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                          <defs>
                                                <filter id="goo">
                                                      <feGaussianBlur in="SourceGraphic"
                                                                      stdDeviation="10"
                                                                      result="blur" />
                                                      <feColorMatrix in="blur"
                                                                     mode="matrix"
                                                                     values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8"
                                                                     result="goo" />
                                                      <feBlend in="SourceGraphic"
                                                               in2="goo" />
                                                </filter>
                                          </defs>
                                    </svg>
                                    <div class="gradients-container">
                                          <div class="g1"></div>
                                          <div class="g2"></div>
                                          <div class="g3"></div>
                                          <div class="g4"></div>
                                          <div class="g5"></div>
                                          <div class="interactive"></div>
                                    </div>
                                    <div class="gradients-container">
                                          <div class="g1"></div>
                                          <div class="g2"></div>
                                          <div class="g3"></div>
                                          <div class="g4"></div>
                                          <div class="g5"></div>
                                          <div class="interactive"></div>
                                    </div>
                              </div>
                        </div> -->
                        <div class="test-content-box">
                              <h3>Project Title</h3>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate corporis nam a,
                                    delectus nobis vel, architecto illum accusantium dolorum molestiae, ducimus quisquam
                                    recusandae esse fuga fugit ut ipsa deleniti laborum.
                              </p>
                        </div>
                        <div class="test-content-box">
                              <h3>Project Title</h3>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate corporis nam a,
                                    delectus nobis vel, architecto illum accusantium dolorum molestiae, ducimus quisquam
                                    recusandae esse fuga fugit ut ipsa deleniti laborum.
                              </p>
                        </div>
                        <div class="test-content-box">
                              <h3>Project Title</h3>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate corporis nam a,
                                    delectus nobis vel, architecto illum accusantium dolorum molestiae, ducimus quisquam
                                    recusandae esse fuga fugit ut ipsa deleniti laborum.
                              </p>
                        </div>
                        <div class="test-content-box">
                              <h3>Project Title</h3>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate corporis nam a,
                                    delectus nobis vel, architecto illum accusantium dolorum molestiae, ducimus quisquam
                                    recusandae esse fuga fugit ut ipsa deleniti laborum.
                              </p>
                        </div>
                        <div class="test-content-box">
                              <h3>Project Title</h3>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate corporis nam a,
                                    delectus nobis vel, architecto illum accusantium dolorum molestiae, ducimus quisquam
                                    recusandae esse fuga fugit ut ipsa deleniti laborum.
                              </p>
                        </div>
                  </div>

                  <div id="toggle-aura"
                       class="ball">
                        <div class="ball-text">Change Aura</div>
                        <span style="--color: var(--primary-color); --i:18px; --d:2.5s;"></span>
                        <span style="--color: var(--contrast-color); --i:13px; --d:5s;"></span>
                        <span style="--color: var(--accent-color); --i:15px; --d:7.5s;"></span>
                        <span style="--color: var(--text-color); --i:20px; --d:10s;"></span>
                  </div>

                  <div class="toggle-switch-container">
                        <div id="toggle-light-dark"
                             class="toggle-switch switch-vertical">
                              <input id="toggle-a"
                                     type="radio"
                                     name="switch"
                                     checked="checked" />
                              <!-- <label for="toggle-a">Option A</label> -->
                              <input id="toggle-b"
                                     type="radio"
                                     name="switch" />
                              <!-- <label for="toggle-b">Option B</label> -->
                              <span class="toggle-outside">
                                    <span class="toggle-inside"></span>
                              </span>
                        </div>
                  </div>