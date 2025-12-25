<?php get_header(); ?>

<!-- ALL PAGES IN ONE FILE -->
<!-- HOME PAGE -->
<div id="home" class="page active">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/hero-background.jpeg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">AQUALUX LAND DEWATERING L.L.C</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Trusted dewatering and pump rental company delivering fast, effective water control solutions</p>
        <div class="cta-buttons" style="animation: fadeInUp 0.8s ease-out 0.6s both; display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a onclick="showPage('contact')" class="btn btn-primary" style="display: inline-block; padding: 12px 25px; background: var(--primary); color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">Request a Quote</a>
            <a href="tel:+971522479361" class="btn btn-secondary" style="display: inline-block; padding: 12px 25px; background: var(--secondary); color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">Call Now</a>
            <a href="https://wa.me/971522479361" class="btn btn-whatsapp" target="_blank" style="display: inline-block; padding: 12px 25px; background: #25D366; color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">WhatsApp</a>
        </div>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <h2 class="section-title" style="text-align: center; font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 30px; color: var(--secondary);">Our Services</h2>
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
            <div class="service-card" onclick="showPage('deep-well')" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; display: flex; flex-direction: column; height: 100%;">
                <div class="service-image-top" style="width: 100%; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/service-deepwell.jpg" 
                         alt="Dewatering Services" 
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0; transition: transform 0.3s;">
                </div>
                <div class="service-card-content" style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--secondary); margin-bottom: 1rem; font-size: 1.3rem; text-align: center;">Dewatering Services</h3>
                    <ul style="list-style: none; margin: 1rem 0; padding: 0; flex-grow: 1;">
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Deep Well Dewatering
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Wellpoint Dewatering
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> French Drain System
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Over Pumping Works
                        </li>
                    </ul>
                </div>
            </div>
            <div class="service-card" onclick="showPage('pump-rental')" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; display: flex; flex-direction: column; height: 100%;">
                <div class="service-image-top" style="width: 100%; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/service-pump.jpeg" 
                         alt="Pump & Generator Rental" 
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0; transition: transform 0.3s;">
                </div>
                <div class="service-card-content" style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--secondary); margin-bottom: 1rem; font-size: 1.3rem; text-align: center;">Pump & Generator Rental</h3>
                    <ul style="list-style: none; margin: 1rem 0; padding: 0; flex-grow: 1;">
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Generators
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> 8"/6" Dewatering Pumps
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Booster Pumps
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Electrical Pumps
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about" style="padding: 40px 15px; max-width: 1200px; margin: 0 auto; background: var(--light-gray);">
        <h2 class="section-title" style="text-align: center; font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 30px; color: var(--secondary);">About AQUALUX</h2>
        <div class="about-content" style="display: grid; grid-template-columns: 1fr; gap: 30px; align-items: center;">
            <div class="about-text">
                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Your Trusted Partner in Water Control Solutions</h2>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">AQUALUX LAND DEWATERING L.L.C is dedicated to providing fast, effective water control solutions for construction, infrastructure, and industrial projects across all Emirates in the UAE.</p>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 25px;">We specialize in dewatering services and high-quality pump rentals, ensuring your project stays on schedule and within budget.</p>
                <div class="about-features" style="display: grid; gap: 15px;">
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Fast Response</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Quick deployment to meet your project deadlines</p>
                        </div>
                    </div>
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Quality Equipment</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Durable, reliable pumps and generators</p>
                        </div>
                    </div>
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Expert Team</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Professional support throughout your project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <div class="equipment-image-container">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/equipment-image-e1766511941540.jpeg" 
                         alt="Aqualux Dewatering Equipment - Professional Water Management Systems" 
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <div class="image-caption" style="text-align: center; margin-top: 10px; font-style: italic; color: var(--gray); font-size: 0.9rem;">
                        Our professional dewatering equipment fleet ready for deployment
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- SERVICES PAGE -->
<div id="services" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/equipment-image-e1766511941540.jpeg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Our Services</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Comprehensive dewatering and pump rental solutions for your project needs</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
            <div class="service-card" onclick="showPage('deep-well')" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; display: flex; flex-direction: column; height: 100%;">
                <div class="service-image-top" style="width: 100%; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/service-deepwell.jpg" 
                         alt="Dewatering Services" 
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0; transition: transform 0.3s;">
                </div>
                <div class="service-card-content" style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--secondary); margin-bottom: 1rem; font-size: 1.3rem; text-align: center;">Dewatering Services</h3>
                    <p style="color: var(--gray); margin-bottom: 1.5rem; line-height: 1.6; text-align: center; font-size: 0.95rem;">Complete dewatering solutions for deep excavations and construction sites</p>
                    <ul style="list-style: none; margin: 1rem 0; padding: 0; flex-grow: 1;">
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Deep Well Dewatering
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Wellpoint Dewatering
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> French Drain System
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Over Pumping Works
                        </li>
                    </ul>
                    <button class="btn btn-primary" onclick="showPage('deep-well')" style="margin-top: auto; align-self: center; padding: 0.8rem 1.5rem; width: auto; background: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.95rem;">Learn More →</button>
                </div>
            </div>
            <div class="service-card" onclick="showPage('pump-rental')" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; display: flex; flex-direction: column; height: 100%;">
                <div class="service-image-top" style="width: 100%; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/service-pump.jpeg" 
                         alt="Pump & Generator Rental" 
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0; transition: transform 0.3s;">
                </div>
                <div class="service-card-content" style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--secondary); margin-bottom: 1rem; font-size: 1.3rem; text-align: center;">Pump & Generator Rental</h3>
                    <p style="color: var(--gray); margin-bottom: 1.5rem; line-height: 1.6; text-align: center; font-size: 0.95rem;">High-quality pumps and generators available for short or long-term rental</p>
                    <ul style="list-style: none; margin: 1rem 0; padding: 0; flex-grow: 1;">
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Generators
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> 8"/6" Dewatering Pumps
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Booster Pumps
                        </li>
                        <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--dark); line-height: 1.5; font-size: 0.95rem;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Electrical Pumps
                        </li>
                    </ul>
                    <button class="btn btn-primary" onclick="showPage('pump-rental')" style="margin-top: auto; align-self: center; padding: 0.8rem 1.5rem; width: auto; background: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.95rem;">Learn More →</button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- DEWATERING SERVICES PAGE -->
<div id="deep-well" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/service-deepwell.jpg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Dewatering Services</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Professional water control for deep excavations and construction sites</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="service-content" style="display: grid; grid-template-columns: 1fr; gap: 30px;">
            <div class="service-main">
                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Overview</h2>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 25px;">Our dewatering services provide effective groundwater control for construction projects, infrastructure works, and industrial applications. We use advanced techniques and equipment to ensure your site remains dry and safe throughout the project duration.</p>

                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Our Dewatering Services</h2>
                
                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Deep Well Dewatering</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Ideal for large-scale excavations and construction projects requiring significant water removal. Our deep well systems can handle high water tables and large volumes efficiently.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">High Capacity</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Handles large water volumes effectively</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Deep Excavations</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Suitable for depths up to 50+ meters</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Continuous Operation</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">24/7 monitoring and maintenance</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Wellpoint Dewatering</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Perfect for shallow to medium depth excavations. Wellpoint systems create a vacuum to lower the water table around your construction site.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Quick Installation</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Fast setup for urgent projects</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Cost-Effective</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Economical for medium-sized projects</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Flexible Layout</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Adaptable to site conditions</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">French Drain System</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Specialized drainage solution for permanent or temporary water management. Ideal for controlling surface water and preventing waterlogging.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Surface Drainage</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Effective water collection system</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Low Maintenance</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Minimal operational requirements</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Durable</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Long-lasting installation</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Over Pumping Works</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Emergency and temporary water removal solutions for flooding, excavations, and water accumulation issues.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Emergency Response</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Rapid deployment available</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">High Flow Rates</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Quick water removal capability</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Versatile</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Suitable for various applications</p>
                        </div>
                    </div>
                </div>

                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Why Choose Our Dewatering Services?</h2>
                <ul class="benefits-list" style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Experienced team with extensive knowledge of UAE geology
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> State-of-the-art equipment and monitoring systems
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> 24/7 technical support and maintenance
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Environmentally responsible water discharge
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Competitive pricing and flexible rental terms
                    </li>
                </ul>
            </div>

            <div class="service-sidebar">
                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.2rem;">Other Services</h3>
                    <ul class="service-list" style="list-style: none; padding: 0;">
                        <li onclick="showPage('pump-rental')" style="padding: 12px 15px; background: var(--light-gray); margin-bottom: 10px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.95rem;">Pump & Generator Rental</li>
                    </ul>
                </div>

                <div class="cta-box" style="background: var(--primary); padding: 20px; border-radius: 10px; color: white; text-align: center;">
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Need a Quote?</h3>
                    <p style="margin-bottom: 20px; opacity: 0.9; font-size: 0.95rem;">Contact us today for a customized dewatering solution</p>
                    <button class="btn btn-primary" onclick="showPage('contact')" style="background: white; color: var(--primary); border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-weight: bold; transition: transform 0.3s; font-size: 0.95rem; width: 100%;">Request Quote</button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- PUMP RENTAL SERVICE PAGE -->
<div id="pump-rental" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/service-pump.jpeg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Pump & Generator Rental Services</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">High-quality equipment for all your water management and power needs</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="service-content" style="display: grid; grid-template-columns: 1fr; gap: 30px;">
            <div class="service-main">
                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Overview</h2>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 25px;">AQUALUX offers a comprehensive range of pumps and generators for rent, suitable for construction sites, industrial applications, and emergency situations. All our equipment is regularly maintained and tested to ensure reliable performance.</p>

                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Available Equipment</h2>
                
                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Generators</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Reliable power solutions for sites without electrical access or as backup power systems.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Various Capacities</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">From small to industrial-grade generators</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Fuel Efficient</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Modern, economical diesel generators</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Weather Resistant</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Suitable for outdoor UAE conditions</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">8"/6" Dewatering Pumps</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Heavy-duty pumps designed for efficient water removal from construction sites, excavations, and flooded areas.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">High Flow Rate</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Rapid water displacement capability</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Durable Construction</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Built to handle harsh conditions</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Easy Operation</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Simple setup and maintenance</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Booster Pumps</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Increase water pressure for various applications including fire protection systems, irrigation, and water supply.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Pressure Control</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Consistent water pressure delivery</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Energy Efficient</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Optimized power consumption</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Compact Design</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Easy installation in tight spaces</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 12px; font-size: 1.2rem;">Electrical Pumps</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">Efficient electric-powered pumps for sites with reliable power supply, offering quiet operation and low maintenance.</p>
                    <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Quiet Operation</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Minimal noise pollution</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Cost-Effective</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Lower operational costs</p>
                        </div>
                        <div class="feature-item" style="background: var(--light-gray); padding: 12px; border-radius: 5px;">
                            <h4 style="color: var(--primary); margin-bottom: 5px; font-size: 0.95rem;">Eco-Friendly</h4>
                            <p style="color: var(--gray); font-size: 0.85rem;">Zero emissions operation</p>
                        </div>
                    </div>
                </div>

                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Rental Benefits</h2>
                <ul class="benefits-list" style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Flexible rental periods - daily, weekly, or monthly rates
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> All equipment regularly serviced and maintained
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Delivery and installation available across UAE
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; border-bottom: 1px solid var(--light-gray); font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> Technical support and emergency assistance
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--dark); line-height: 1.6; font-size: 0.95rem;">
                        <span style="position: absolute; left: 0; color: var(--primary); font-weight: bold;">✓</span> No long-term commitments required
                    </li>
                </ul>
            </div>

            <div class="service-sidebar">
                <div style="background: var(--white); padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.2rem;">Other Services</h3>
                    <ul class="service-list" style="list-style: none; padding: 0;">
                        <li onclick="showPage('deep-well')" style="padding: 12px 15px; background: var(--light-gray); margin-bottom: 10px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.95rem;">Dewatering Services</li>
                    </ul>
                </div>

                <div class="cta-box" style="background: var(--primary); padding: 20px; border-radius: 10px; color: white; text-align: center;">
                    <h3 style="margin-bottom: 12px; font-size: 1.2rem;">Need Equipment?</h3>
                    <p style="margin-bottom: 20px; opacity: 0.9; font-size: 0.95rem;">Contact us for availability and pricing</p>
                    <button class="btn btn-primary" onclick="showPage('contact')" style="background: white; color: var(--primary); border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-weight: bold; transition: transform 0.3s; font-size: 0.95rem; width: 100%;">Request Quote</button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- PROJECTS PAGE -->
<div id="projects" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1600&q=80'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Our Projects</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Successful dewatering and pump rental solutions delivered across UAE</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 25px;">
            <!-- Project 1: Deep Excavation Dewatering with Wellpoint System -->
            <div class="project-card" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s; height: 100%; display: flex; flex-direction: column;">
                <div class="project-image" style="height: 200px; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/proejct-1.jpeg" alt="Deep Excavation Dewatering with Wellpoint System" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="project-content" style="padding: 20px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--dark); margin-bottom: 12px; font-size: 1.2rem; line-height: 1.4;">Deep Excavation Dewatering Using Wellpoint System</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px; flex-grow: 1; font-size: 0.95rem;">Dewatering for deep excavation where groundwater was present close to surface. Wellpoint system installation along excavation perimeter.</p>
                    <div class="project-details" style="margin-bottom: 20px;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Groundwater successfully lowered below formation level</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Dry and safe excavation achieved</span>
                        </div>
                        <div style="display: flex; align-items: flex-start;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">No work delays due to waterlogging</span>
                        </div>
                    </div>
                    <div class="project-meta" style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: auto;">
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">Wellpoint System</span>
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">Deep Excavation</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Trench Dewatering for Large-Diameter Pipeline Installation -->
            <div class="project-card" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s; height: 100%; display: flex; flex-direction: column;">
                <div class="project-image" style="height: 200px; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/project-2.jpeg" alt="Pipeline Trench Dewatering" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="project-content" style="padding: 20px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--dark); margin-bottom: 12px; font-size: 1.2rem; line-height: 1.4;">Pipeline Trench Dewatering & Groundwater Control</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px; flex-grow: 1; font-size: 0.95rem;">Dewatering of deep pipeline trench for large-diameter pipeline installation with continuous groundwater removal during pipe laying.</p>
                    <div class="project-details" style="margin-bottom: 20px;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Trench kept dry throughout execution</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Safe working environment achieved</span>
                        </div>
                        <div style="display: flex; align-items: flex-start;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Successful pipeline installation without delays</span>
                        </div>
                    </div>
                    <div class="project-meta" style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: auto;">
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">Pipeline Trench</span>
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">Groundwater Control</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Large-Scale Construction Dewatering with High-Capacity Pumps -->
            <div class="project-card" style="background: var(--white); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s; height: 100%; display: flex; flex-direction: column;">
                <div class="project-image" style="height: 200px; overflow: hidden; flex-shrink: 0;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/project-3.jpeg" alt="Large-Scale Construction Dewatering" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="project-content" style="padding: 20px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: var(--dark); margin-bottom: 12px; font-size: 1.2rem; line-height: 1.4;">Large-Scale Construction Dewatering Solutions</h3>
                    <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px; flex-grow: 1; font-size: 0.95rem;">Large-scale dewatering for active construction site with extensive groundwater accumulation using multiple high-capacity pumps.</p>
                    <div class="project-details" style="margin-bottom: 20px;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Effective groundwater management across site</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; margin-bottom: 8px;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Improved accessibility for heavy machinery</span>
                        </div>
                        <div style="display: flex; align-items: flex-start;">
                            <span style="color: var(--primary); margin-right: 10px; flex-shrink: 0; margin-top: 2px;">✓</span>
                            <span style="color: var(--dark); font-size: 0.85rem; line-height: 1.4;">Enhanced construction productivity</span>
                        </div>
                    </div>
                    <div class="project-meta" style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: auto;">
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">High-Capacity Pumps</span>
                        <span class="project-tag" style="background: var(--light-gray); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--dark); white-space: nowrap;">Construction Site</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Start Your Project Section -->
    <section style="padding: 40px 15px; max-width: 1200px; margin: 40px auto 0; background: var(--light-gray); border-radius: 10px;">
        <div style="text-align: center;">
            <h2 style="font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 15px; color: var(--secondary);">Ready to Start Your Project?</h2>
            <p style="color: var(--gray); line-height: 1.6; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto; font-size: 0.95rem;">Looking for reliable dewatering or pump rental services? Contact us today for expert solutions tailored to your needs.</p>
            <div class="cta-buttons" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
                <a onclick="showPage('contact')" class="btn btn-primary" style="display: inline-block; padding: 12px 25px; background: var(--primary); color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">Request a Quote</a>
                <a href="tel:+971522479361" class="btn btn-secondary" style="display: inline-block; padding: 12px 25px; background: var(--secondary); color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">Call Now</a>
                <a href="https://wa.me/971522479361" class="btn btn-whatsapp" target="_blank" style="display: inline-block; padding: 12px 25px; background: #25D366; color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; transition: all 0.3s; cursor: pointer; min-width: 180px; text-align: center;">WhatsApp</a>
            </div>
        </div>
    </section>
</div>

<!-- GALLERY PAGE - COMMENTED OUT FOR FUTURE USE -->
<!--
<div id="gallery" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/gallery-background.png'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Our Gallery</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">View our equipment, projects, and capabilities</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="gallery-filters" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
            <button class="filter-btn active" onclick="filterGallery('all')" style="background: var(--primary); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.9rem;">All</button>
            <button class="filter-btn" onclick="filterGallery('pumps')" style="background: var(--light-gray); color: var(--dark); border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.9rem;">Pumps</button>
            <button class="filter-btn" onclick="filterGallery('sites')" style="background: var(--light-gray); color: var(--dark); border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.9rem;">Sites</button>
            <button class="filter-btn" onclick="filterGallery('equipment')" style="background: var(--light-gray); color: var(--dark); border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background 0.3s; font-size: 0.9rem;">Equipment</button>
        </div>

        <div class="gallery-grid" id="galleryGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
            <div class="gallery-item" data-category="pumps" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 250px;">
                <div class="gallery-image" style="width: 100%; height: 100%; overflow: hidden;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/8-inch-dewatering-pump.png" alt="8 inch Dewatering Pump" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 15px; color: white; transform: translateY(0); transition: transform 0.3s;">
                    <h4 style="margin: 0 0 5px 0; font-size: 1rem;">8" Dewatering Pump</h4>
                    <p style="margin: 0; font-size: 0.85rem; opacity: 0.9;">High-capacity pump in operation</p>
                </div>
            </div>

            <div class="gallery-item" data-category="sites" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 250px;">
                <div class="gallery-image" style="width: 100%; height: 100%; overflow: hidden;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/service-pump.jpeg" alt="Construction Site" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 15px; color: white; transform: translateY(0); transition: transform 0.3s;">
                    <h4 style="margin: 0 0 5px 0; font-size: 1rem;">Construction Site - Dubai</h4>
                    <p style="margin: 0; font-size: 0.85rem; opacity: 0.9;">Deep well dewatering system</p>
                </div>
            </div>

            <div class="gallery-item" data-category="equipment" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 250px;">
                <div class="gallery-image" style="width: 100%; height: 100%; overflow: hidden;">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/Dewatering-Pumps-scaled-1.jpg" alt="Generator Units" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 15px; color: white; transform: translateY(0); transition: transform 0.3s;">
                    <h4 style="margin: 0 0 5px 0; font-size: 1rem;">Our Equipment Fleet</h4>
                    <p style="margin: 0; font-size: 0.85rem; opacity: 0.9;">Professional dewatering equipment</p>
                </div>
            </div>
        </div>

        <div class="cta-section" style="text-align: center; padding: 40px 15px;">
            <h3 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 20px;">Need Our Services?</h3>
            <p style="color: var(--gray); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6; font-size: 0.95rem;">Contact us to discuss your dewatering or equipment rental needs</p>
            <button class="btn btn-primary" onclick="showPage('contact')" style="background: var(--primary); color: white; border: none; padding: 12px 30px; border-radius: 5px; cursor: pointer; font-size: 1rem; font-weight: bold; transition: background 0.3s;">Get in Touch</button>
        </div>
    </section>
</div>
-->

<!-- ABOUT PAGE -->
<div id="about" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/about-background.png'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">About AQUALUX</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Your trusted partner in water control solutions</p>
    </section>

    <section class="about" style="padding: 40px 15px; max-width: 1200px; margin: 0 auto; background: var(--light-gray);">
        <div class="about-content" style="display: grid; grid-template-columns: 1fr; gap: 30px; align-items: center;">
            <div class="about-text">
                <h2 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 15px;">Your Trusted Partner in Water Control Solutions</h2>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 15px;">AQUALUX LAND DEWATERING L.L.C is dedicated to providing fast, effective water control solutions for construction, infrastructure, and industrial projects across all Emirates in the UAE.</p>
                <p style="color: var(--gray); line-height: 1.6; margin-bottom: 25px;">We specialize in dewatering services and high-quality pump rentals, ensuring your project stays on schedule and within budget.</p>
                <div class="about-features" style="display: grid; gap: 15px;">
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Fast Response</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Quick deployment to meet your project deadlines</p>
                        </div>
                    </div>
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Quality Equipment</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Durable, reliable pumps and generators</p>
                        </div>
                    </div>
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">Expert Team</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Professional support throughout your project</p>
                        </div>
                    </div>
                    <div class="feature" style="display: flex; align-items: flex-start; gap: 12px;">
                        <div class="feature-icon" style="background: var(--primary); color: white; width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.9rem;">✓</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 5px; font-size: 1rem;">All Emirates Coverage</h4>
                            <p style="color: var(--gray); line-height: 1.5; font-size: 0.9rem;">Services available across UAE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <div class="equipment-image-container">
                    <img src="https://aqualuxdw.com/wp-content/uploads/2025/12/equipment-image-e1766511941540.jpeg" 
                         alt="Aqualux Dewatering Equipment - Professional Water Management Systems" 
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <div class="image-caption" style="text-align: center; margin-top: 10px; font-style: italic; color: var(--gray); font-size: 0.9rem;">
                        Our professional dewatering equipment fleet - Ready for any project
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <h2 class="section-title" style="text-align: center; font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 30px; color: var(--secondary);">Why Choose AQUALUX?</h2>
        <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">🎯 Specialized Expertise</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Deep knowledge of UAE geology and construction requirements</p>
            </div>
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">⚡ Rapid Deployment</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Emergency services available with quick response times</p>
            </div>
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">🔧 Modern Equipment</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Latest technology pumps and monitoring systems</p>
            </div>
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">🌍 Eco-Conscious</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Environmentally responsible water management practices</p>
            </div>
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">💰 Competitive Pricing</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Best value without compromising on quality</p>
            </div>
            <div class="feature-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 1rem;">🕐 24/7 Support</h4>
                <p style="color: var(--gray); line-height: 1.6; font-size: 0.9rem;">Round-the-clock technical assistance and monitoring</p>
            </div>
        </div>
    </section>
</div>

<!-- CONTACT PAGE -->
<div id="contact" class="page">
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://aqualuxdw.com/wp-content/uploads/2025/12/contact-background.jpg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px 20px; color: white;">
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.2s both;">Contact Us</h1>
        <p style="font-size: clamp(1rem, 3vw, 1.2rem); max-width: 800px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); animation: fadeInUp 0.8s ease-out 0.4s both;">Get in touch for quotes, inquiries, or emergency services</p>
    </section>

    <section style="padding: 40px 15px; max-width: 1200px; margin: 0 auto;">
        <div class="contact-container" style="display: grid; grid-template-columns: 1fr; gap: 40px;">
            <div class="contact-info">
                <h3 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 25px; text-align: center;">Get in Touch</h3>
                <div class="contact-items" style="display: grid; grid-template-columns: 1fr; gap: 20px;">
                    <div class="contact-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center;">
                        <div class="contact-item-icon" style="background: var(--primary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem;">📍</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 8px; font-size: 1.1rem;">Address</h4>
                            <p style="color: var(--gray); line-height: 1.6; font-size: 0.95rem;">Ahmed Almesafri Building<br>Shop No. 108, Manama 8<br>Ajman, UAE</p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center;">
                        <div class="contact-item-icon" style="background: var(--primary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem;">📞</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 8px; font-size: 1.1rem;">Phone</h4>
                            <p style="color: var(--gray); line-height: 1.6; font-size: 0.95rem;">
                                <a href="tel:+971522479361" style="color: var(--primary); text-decoration: none; font-weight: 500; display: inline-block; padding: 8px 16px; background: var(--light-gray); border-radius: 5px; margin: 5px 0;">+971 52 247 9361</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center;">
                        <div class="contact-item-icon" style="background: #25D366; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem;">💬</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 8px; font-size: 1.1rem;">WhatsApp</h4>
                            <p style="color: var(--gray); line-height: 1.6; font-size: 0.95rem;">
                                <a href="https://wa.me/971522479361" target="_blank" style="color: white; text-decoration: none; font-weight: 500; display: inline-block; padding: 8px 16px; background: #25D366; border-radius: 5px; margin: 5px 0;">Chat on WhatsApp</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center;">
                        <div class="contact-item-icon" style="background: var(--primary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem;">✉️</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 8px; font-size: 1.1rem;">Email</h4>
                            <p style="color: var(--gray); line-height: 1.6; font-size: 0.95rem;">
                                <a href="mailto:info@aqualuxdw.com" style="color: var(--primary); text-decoration: none; font-weight: 500; display: inline-block; padding: 8px 16px; background: var(--light-gray); border-radius: 5px; margin: 5px 0;">info@aqualuxdw.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center;">
                        <div class="contact-item-icon" style="background: var(--primary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem;">🕒</div>
                        <div>
                            <h4 style="color: var(--dark); margin-bottom: 8px; font-size: 1.1rem;">Working Hours</h4>
                            <p style="color: var(--gray); line-height: 1.6; font-size: 0.95rem;">
                                8 AM to 6 PM<br>
                                <span style="display: inline-block; padding: 4px 12px; background: var(--light-gray); border-radius: 5px; margin-top: 5px;">Sunday to Thursday</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <div style="background: var(--white); padding: 25px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 25px; text-align: center;">Request a Quote</h3>
                    <form id="quoteForm">
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="display: block; margin-bottom: 8px; color: var(--dark); font-weight: 500; font-size: 0.95rem;">Name *</label>
                            <input type="text" name="name" required class="form-input" style="width: 100%; padding: 12px 15px; border: 2px solid var(--light-gray); border-radius: 5px; font-size: 0.95rem; background: var(--white); transition: all 0.3s;">
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="display: block; margin-bottom: 8px; color: var(--dark); font-weight: 500; font-size: 0.95rem;">Email *</label>
                            <input type="email" name="email" required class="form-input" style="width: 100%; padding: 12px 15px; border: 2px solid var(--light-gray); border-radius: 5px; font-size: 0.95rem; background: var(--white); transition: all 0.3s;">
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="display: block; margin-bottom: 8px; color: var(--dark); font-weight: 500; font-size: 0.95rem;">Phone *</label>
                            <input type="tel" name="phone" required class="form-input" style="width: 100%; padding: 12px 15px; border: 2px solid var(--light-gray); border-radius: 5px; font-size: 0.95rem; background: var(--white); transition: all 0.3s;">
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="display: block; margin-bottom: 8px; color: var(--dark); font-weight: 500; font-size: 0.95rem;">Service Required *</label>
                            <select name="service" required class="form-select" style="width: 100%; padding: 12px 15px; border: 2px solid var(--light-gray); border-radius: 5px; font-size: 0.95rem; background: var(--white); transition: all 0.3s; cursor: pointer;">
                                <option value="">Select a service</option>
                                <option value="deep-well">Dewatering Services</option>
                                <option value="wellpoint">Wellpoint Dewatering</option>
                                <option value="french-drain">French Drain System</option>
                                <option value="over-pumping">Over Pumping Works</option>
                                <option value="generators">Generator Rental</option>
                                <option value="pumps-8-6">8"/6" Dewatering Pumps</option>
                                <option value="booster">Booster Pumps</option>
                                <option value="electrical">Electrical Pumps</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label style="display: block; margin-bottom: 8px; color: var(--dark); font-weight: 500; font-size: 0.95rem;">Message</label>
                            <textarea name="message" rows="4" class="form-textarea" style="width: 100%; padding: 12px 15px; border: 2px solid var(--light-gray); border-radius: 5px; font-size: 0.95rem; background: var(--white); resize: vertical; transition: all 0.3s;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: var(--primary); color: white; border: none; padding: 15px 30px; border-radius: 5px; cursor: pointer; font-size: 1rem; font-weight: bold; width: 100%; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <span>Submit Quote Request</span>
                            <span style="font-size: 1.2rem;">📱</span>
                        </button>
                        <p style="text-align: center; margin-top: 15px; color: var(--gray); font-size: 0.85rem;">(Will open WhatsApp with your message)</p>
                    </form>
                </div>
                
                <!-- Quick Contact Buttons -->
                <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
                    <a href="tel:+971522479361" style="background: var(--secondary); color: white; text-decoration: none; padding: 15px; border-radius: 5px; text-align: center; font-weight: bold; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <span>📞 Call Now</span>
                    </a>
                    <a href="https://wa.me/971522479361" target="_blank" style="background: #25D366; color: white; text-decoration: none; padding: 15px; border-radius: 5px; text-align: center; font-weight: bold; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <span>💬 WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Map Location Section -->
        <div style="margin-top: 50px; background: var(--white); padding: 25px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
            <h3 style="font-size: clamp(1.3rem, 3vw, 1.8rem); color: var(--dark); margin-bottom: 20px; text-align: center;">Our Location</h3>
            <div style="background: var(--light-gray); border-radius: 8px; padding: 20px; text-align: center;">
                <p style="color: var(--gray); margin-bottom: 15px; font-size: 0.95rem;">
                    <strong>📍 Ahmed Almesafri Building</strong><br>
                    Shop No. 108, Manama 8, Ajman, UAE
                </p>
                <div style="background: #f0f0f0; height: 200px; border-radius: 5px; display: flex; align-items: center; justify-content: center; color: var(--gray);">
                    <div style="text-align: center;">
                        <div style="font-size: 3rem; margin-bottom: 10px;">📍</div>
                        <p style="font-size: 0.9rem;">Map location would be displayed here</p>
                        <p style="font-size: 0.8rem; color: var(--primary); margin-top: 10px;">
                            <a href="https://maps.google.com/?q=Ahmed+Almesafri+Building+Shop+No.+108+Manama+8+Ajman+UAE" target="_blank" style="color: var(--primary); text-decoration: none;">
                                Open in Google Maps →
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* RESPONSIVE DESIGN */
/* Mobile First Approach */

/* Base styles for mobile (320px - 480px) */
@media screen and (max-width: 480px) {
    /* Hero section adjustments */
    .hero h1 {
        font-size: 1.5rem !important;
        margin-bottom: 15px !important;
    }
    
    .hero p {
        font-size: 0.9rem !important;
        margin-bottom: 20px !important;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
        gap: 10px !important;
    }
    
    .btn {
        width: 100% !important;
        max-width: 280px;
        margin: 0 !important;
        min-width: auto !important;
    }
    
    /* About section */
    .about-content {
        grid-template-columns: 1fr !important;
        gap: 25px !important;
    }
    
    .about-text h2 {
        font-size: 1.3rem !important;
    }
    
    .about-image img {
        height: 250px !important;
    }
    
    /* Service cards */
    .services-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .service-card-content h3 {
        font-size: 1.2rem !important;
    }
    
    .service-image-top img {
        height: 180px !important;
    }
    
    /* Service content pages */
    .service-content {
        grid-template-columns: 1fr !important;
        gap: 25px !important;
    }
    
    .service-main h2 {
        font-size: 1.3rem !important;
    }
    
    .feature-grid {
        grid-template-columns: 1fr !important;
    }
    
    /* Projects grid */
    .projects-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .project-image {
        height: 180px !important;
    }
    
    .project-content h3 {
        font-size: 1.1rem !important;
    }
    
    /* CONTACT PAGE - UPDATED */
    .contact-container {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    
    .contact-info h3,
    .contact-form h3 {
        font-size: 1.3rem !important;
        margin-bottom: 20px !important;
        text-align: center !important;
    }
    
    .contact-items {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }
    
    .contact-item {
        text-align: center !important;
        padding: 15px !important;
        margin: 0 5px !important;
    }
    
    .contact-item-icon {
        margin: 0 auto 12px !important;
        width: 40px !important;
        height: 40px !important;
        font-size: 1rem !important;
    }
    
    .contact-item h4 {
        font-size: 1rem !important;
    }
    
    .contact-item p {
        font-size: 0.9rem !important;
    }
    
    .contact-form > div {
        padding: 20px !important;
    }
    
    .form-group {
        margin-bottom: 15px !important;
    }
    
    input, select, textarea {
        padding: 10px 12px !important;
        font-size: 16px !important; /* Prevent iOS zoom */
    }
    
    button[type="submit"] {
        padding: 12px 20px !important;
        font-size: 0.95rem !important;
    }
    
    /* Quick contact buttons */
    .contact-form > div:last-child {
        grid-template-columns: 1fr !important;
        gap: 10px !important;
        margin-top: 20px !important;
    }
    
    .contact-form > div:last-child a {
        padding: 12px !important;
        font-size: 0.9rem !important;
    }
    
    /* Map section */
    .map-section {
        padding: 15px !important;
        margin-top: 30px !important;
    }
    
    .map-placeholder {
        height: 150px !important;
    }
    
    /* Section padding */
    section {
        padding: 30px 15px !important;
    }
    
    /* Feature grid on about page */
    .feature-grid {
        grid-template-columns: 1fr !important;
    }
    
    .feature-item {
        padding: 15px !important;
    }
    
    /* Stats section */
    .stat-item div:first-child {
        font-size: 2rem !important;
    }
}

/* Small Tablets (481px - 768px) */
@media screen and (min-width: 481px) and (max-width: 768px) {
    .hero h1 {
        font-size: 1.8rem !important;
    }
    
    .hero p {
        font-size: 1rem !important;
    }
    
    .about-content {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    
    .services-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)) !important;
        gap: 25px !important;
    }
    
    .service-content {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    
    /* CONTACT PAGE - UPDATED */
    .contact-container {
        grid-template-columns: 1fr !important;
        gap: 40px !important;
    }
    
    .contact-items {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .contact-item {
        padding: 18px !important;
        text-align: center !important;
    }
    
    .contact-item-icon {
        margin: 0 auto 15px !important;
    }
    
    /* Quick contact buttons */
    .contact-form > div:last-child {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    
    .projects-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;
        gap: 25px !important;
    }
    
    .cta-buttons {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px !important;
    }
    
    .btn {
        min-width: 160px !important;
        padding: 12px 20px !important;
    }
}

/* Tablets (769px - 1024px) */
@media screen and (min-width: 769px) and (max-width: 1024px) {
    .about-content {
        grid-template-columns: 1fr 1fr !important;
    }
    
    .service-content {
        grid-template-columns: 1.5fr 1fr !important;
        gap: 30px !important;
    }
    
    /* CONTACT PAGE - UPDATED */
    .contact-container {
        grid-template-columns: 1fr 1fr !important;
        gap: 30px !important;
    }
    
    .contact-items {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .contact-item {
        padding: 20px !important;
        text-align: center !important;
    }
    
    .contact-item-icon {
        margin: 0 auto 15px !important;
    }
    
    /* Quick contact buttons */
    .contact-form > div:last-child {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .projects-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;
    }
    
    .btn {
        min-width: 170px !important;
    }
}

/* Desktop (1025px and above) */
@media screen and (min-width: 1025px) {
    .about-content {
        grid-template-columns: 1fr 1fr !important;
    }
    
    .service-content {
        grid-template-columns: 2fr 1fr !important;
        gap: 40px !important;
    }
    
    /* CONTACT PAGE - UPDATED */
    .contact-container {
        grid-template-columns: 1fr 1fr !important;
        gap: 50px !important;
    }
    
    .contact-items {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .contact-item {
        padding: 20px !important;
        text-align: left !important;
    }
    
    .contact-item-icon {
        margin: 0 auto 15px !important;
    }
    
    .contact-info h3,
    .contact-form h3 {
        text-align: left !important;
    }
    
    /* Quick contact buttons */
    .contact-form > div:last-child {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .projects-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)) !important;
        gap: 30px !important;
    }
    
    .btn {
        min-width: 180px !important;
    }
    
    .about-image img {
        height: 350px !important;
    }
}

/* Additional responsive adjustments for medium screens */
@media screen and (max-width: 600px) {
    .section-title {
        font-size: 1.3rem !important;
        margin-bottom: 25px !important;
    }
    
    .feature-item h4 {
        font-size: 0.9rem !important;
    }
    
    .project-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 5px !important;
    }
    
    .project-tag {
        margin-bottom: 5px;
    }
}

/* For very small screens */
@media screen and (max-width: 350px) {
    .hero h1 {
        font-size: 1.3rem !important;
    }
    
    .hero p {
        font-size: 0.85rem !important;
    }
    
    .service-card-content {
        padding: 1rem !important;
    }
    
    .project-content {
        padding: 15px !important;
    }
    
    .contact-item {
        padding: 12px !important;
        margin: 0 2px !important;
    }
    
    .contact-item-icon {
        width: 35px !important;
        height: 35px !important;
    }
    
    .btn {
        padding: 10px 15px !important;
        font-size: 0.9rem !important;
    }
    
    button[type="submit"] {
        padding: 10px 15px !important;
        font-size: 0.9rem !important;
    }
}

/* Fixed navigation drawer issue */
@media screen and (max-width: 768px) {
    /* Ensure navigation drawer closes when page is clicked */
    body.mobile-menu-open {
        overflow: hidden;
    }
    
    /* Improve form readability on mobile */
    .form-group label {
        text-align: left !important;
    }
    
    select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px;
        padding-right: 40px !important;
    }
}

/* Animation Keyframes - Only for Hero Sections */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Button Styles */
.btn {
    display: inline-block;
    padding: 12px 25px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s;
    cursor: pointer;
    border: none;
    margin: 5px;
    min-width: 120px;
    text-align: center;
}

.btn-primary {
    background: var(--primary);
    color: white;
}

.btn-secondary {
    background: var(--secondary);
    color: white;
}

.btn-whatsapp {
    background: #25D366;
    color: white;
}

/* Hover effects */
@media (hover: hover) {
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .service-card:hover .service-image-top img {
        transform: scale(1.05);
    }
    
    .project-card:hover {
        transform: translateY(-5px);
    }
    
    .project-card:hover .project-image img {
        transform: scale(1.05);
    }
    
    /* CONTACT PAGE HOVER EFFECTS */
    .contact-item a:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    button[type="submit"]:hover,
    .contact-form > div:last-child a:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
    }
    
    .btn-secondary:hover {
        background: var(--secondary-dark);
        transform: translateY(-2px);
    }
    
    .btn-whatsapp:hover {
        background: #128C7E;
        transform: translateY(-2px);
    }
    
    .service-list li:hover {
        background: var(--primary) !important;
        color: white !important;
    }
}

/* CONTACT PAGE SPECIFIC STYLES */
.contact-item a {
    transition: all 0.3s;
    text-decoration: none;
}

.contact-item a:hover {
    text-decoration: underline;
}

/* CONTACT FORM FIELD OUTLINES - FIXED */
.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid var(--light-gray);
    border-radius: 5px;
    font-size: 0.95rem;
    background: var(--white);
    transition: all 0.3s ease;
    outline: none;
    font-family: inherit;
}

/* Default state - Visible borders */
.form-input,
.form-select,
.form-textarea {
    border-color: var(--light-gray) !important;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

/* Focus states with outlines */
.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    border-color: var(--primary) !important;
    outline: 3px solid rgba(var(--primary-rgb, 0, 123, 255), 0.2) !important;
    outline-offset: 2px;
    box-shadow: 0 0 0 4px rgba(var(--primary-rgb, 0, 123, 255), 0.1), 0 2px 5px rgba(0,0,0,0.1) !important;
    transform: translateY(-1px);
}

/* Hover states */
.form-input:hover,
.form-select:hover,
.form-textarea:hover {
    border-color: #b0b0b0 !important;
}

/* Active state */
.form-input:active,
.form-select:active,
.form-textarea:active {
    border-color: var(--primary-dark) !important;
    transform: translateY(0);
}

/* Invalid state */
.form-input:invalid:not(:placeholder-shown),
.form-select:invalid:not(:placeholder-shown),
.form-textarea:invalid:not(:placeholder-shown) {
    border-color: #dc3545 !important;
    outline-color: rgba(220, 53, 69, 0.2) !important;
}

/* Valid state */
.form-input:valid:not(:placeholder-shown),
.form-select:valid:not(:placeholder-shown),
.form-textarea:valid:not(:placeholder-shown) {
    border-color: #28a745 !important;
    outline-color: rgba(40, 167, 69, 0.2) !important;
}

/* Placeholder styling */
.form-input::placeholder,
.form-textarea::placeholder {
    color: #6c757d;
    opacity: 0.7;
}

/* Select dropdown arrow */
.form-select {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236c757d' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 16px;
    padding-right: 40px !important;
    cursor: pointer;
    appearance: none;
}

.form-select:focus {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23007bff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
}

/* Textarea specific */
.form-textarea {
    resize: vertical;
    min-height: 120px;
    line-height: 1.5;
}

/* Touch feedback for mobile */
@media (hover: none) and (pointer: coarse) {
    .btn, 
    .service-card,
    .project-card,
    .service-list li,
    .contact-item {
        min-height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .service-card, .project-card {
        cursor: pointer;
    }
    
    /* Add touch feedback for form fields */
    .form-input:active,
    .form-select:active,
    .form-textarea:active {
        transform: scale(0.995);
        transition: transform 0.1s;
    }
    
    /* Add touch feedback */
    .service-card:active, 
    .project-card:active,
    .contact-item:active,
    button[type="submit"]:active,
    .contact-form > div:last-child a:active,
    .btn:active {
        transform: scale(0.98);
        transition: transform 0.1s;
    }
    
    /* Larger tap targets for mobile */
    .form-input,
    .form-select,
    .form-textarea {
        min-height: 44px;
    }
}

/* Center alignment for all contact content */
.contact-info,
.contact-form {
    display: flex;
    flex-direction: column;
}

.contact-info h3,
.contact-form h3 {
    text-align: center;
}

/* Page transitions */
.page {
    display: none;
}

.page.active {
    display: block;
}

/* Ensure images are responsive */
img {
    max-width: 100%;
    height: auto;
}

/* Improve readability on mobile */
@media screen and (max-width: 768px) {
    body {
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    
    p, li, span, div {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    
    /* Improve form field visibility on mobile */
    .form-input,
    .form-select,
    .form-textarea {
        font-size: 16px !important; /* Prevent iOS zoom */
        padding: 14px 15px !important;
        border-width: 2px !important;
    }
}

/* Prevent horizontal scrolling */
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

* {
    box-sizing: border-box;
}

/* CONTACT PAGE ADDITIONAL STYLES */
.contact-item {
    background: var(--white);
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    padding: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.contact-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.contact-item-icon {
    background: var(--primary);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.whatsapp-icon {
    background: #25D366 !important;
}

.contact-item h4 {
    color: var(--dark);
    margin-bottom: 8px;
    font-size: 1.1rem;
}

.contact-item p {
    color: var(--gray);
    line-height: 1.6;
    font-size: 0.95rem;
}

.contact-item a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    display: inline-block;
    padding: 8px 16px;
    background: var(--light-gray);
    border-radius: 5px;
    margin: 5px 0;
    transition: all 0.3s;
}

.contact-item a.whatsapp-link {
    background: #25D366;
    color: white;
}

.contact-form {
    background: var(--white);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--dark);
    font-weight: 500;
    font-size: 0.95rem;
}

/* Quick contact buttons */
.quick-contact-buttons {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
    margin-top: 30px;
}

.quick-contact-buttons a {
    background: var(--secondary);
    color: white;
    text-decoration: none;
    padding: 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.quick-contact-buttons a.whatsapp-btn {
    background: #25D366;
}

/* Map section */
.map-section {
    margin-top: 50px;
    background: var(--white);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.map-placeholder {
    background: #f0f0f0;
    height: 200px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gray);
}

.map-placeholder div {
    text-align: center;
}

.map-placeholder div .map-icon {
    font-size: 3rem;
    margin-bottom: 10px;
}

.map-placeholder div p {
    font-size: 0.9rem;
    margin: 5px 0;
}

.map-placeholder div a {
    color: var(--primary);
    text-decoration: none;
    font-size: 0.8rem;
    display: inline-block;
    margin-top: 10px;
}

/* Form field animations */
@keyframes fieldFocus {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.005);
    }
    100% {
        transform: scale(1);
    }
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    animation: fieldFocus 0.3s ease;
}

/* Required field indicator */
.form-group label::after {
    content: ' *';
    color: #dc3545;
    font-weight: bold;
}

.form-group label[for="message"]::after {
    content: ''; /* Message is optional */
}

/* Form field container focus */
.form-group:focus-within label {
    color: var(--primary);
    font-weight: 600;
}

/* Form submit button focus */
button[type="submit"]:focus {
    outline: 3px solid rgba(var(--primary-rgb, 0, 123, 255), 0.3) !important;
    outline-offset: 2px;
}

/* Accessibility: High contrast mode support */
@media (prefers-contrast: high) {
    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: 3px solid #000 !important;
        outline-offset: 1px;
        border-color: #000 !important;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        animation: none;
        transition: none;
    }
}

/* Form field clear visual hierarchy */
.form-group {
    position: relative;
}

/* Add subtle border to form container for better definition */
.contact-form > div {
    border: 1px solid rgba(0,0,0,0.08);
}

/* Error message styling (optional - for JavaScript validation) */
.error-message {
    color: #dc3545;
    font-size: 0.85rem;
    margin-top: 5px;
    display: none;
}

.form-group.error .form-input,
.form-group.error .form-select,
.form-group.error .form-textarea {
    border-color: #dc3545 !important;
}

.form-group.error .error-message {
    display: block;
}
</style>

<script>
// Form submission and validation
document.addEventListener('DOMContentLoaded', function() {
    const quoteForm = document.getElementById('quoteForm');
    
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const name = quoteForm.querySelector('input[name="name"]');
            const email = quoteForm.querySelector('input[name="email"]');
            const phone = quoteForm.querySelector('input[name="phone"]');
            const service = quoteForm.querySelector('select[name="service"]');
            const message = quoteForm.querySelector('textarea[name="message"]');
            
            let isValid = true;
            
            // Reset error states
            document.querySelectorAll('.form-group').forEach(group => {
                group.classList.remove('error');
            });
            
            // Validate required fields
            if (!name.value.trim()) {
                name.parentElement.classList.add('error');
                isValid = false;
            }
            
            if (!email.value.trim() || !isValidEmail(email.value)) {
                email.parentElement.classList.add('error');
                isValid = false;
            }
            
            if (!phone.value.trim()) {
                phone.parentElement.classList.add('error');
                isValid = false;
            }
            
            if (!service.value) {
                service.parentElement.classList.add('error');
                isValid = false;
            }
            
            if (isValid) {
                // Prepare WhatsApp message
                const serviceText = service.options[service.selectedIndex].text;
                const whatsappMessage = `*New Quote Request*%0A%0A` +
                    `*Name:* ${name.value}%0A` +
                    `*Email:* ${email.value}%0A` +
                    `*Phone:* ${phone.value}%0A` +
                    `*Service Required:* ${serviceText}%0A` +
                    `*Message:* ${message.value || 'No message provided'}`;
                
                // Open WhatsApp
                window.open(`https://wa.me/971522479361?text=${whatsappMessage}`, '_blank');
                
                // Reset form
                quoteForm.reset();
                
                // Show success message (optional)
                alert('Opening WhatsApp to send your quote request...');
            } else {
                // Focus on first error
                const firstError = quoteForm.querySelector('.error input, .error select');
                if (firstError) {
                    firstError.focus();
                }
            }
        });
        
        // Real-time validation
        const formInputs = quoteForm.querySelectorAll('input, select, textarea');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.parentElement.classList.contains('error')) {
                    validateField(this);
                }
            });
        });
        
        function validateField(field) {
            const parent = field.parentElement;
            
            if (field.hasAttribute('required') && !field.value.trim()) {
                parent.classList.add('error');
                return false;
            }
            
            if (field.type === 'email' && field.value.trim()) {
                if (!isValidEmail(field.value)) {
                    parent.classList.add('error');
                    return false;
                }
            }
            
            parent.classList.remove('error');
            return true;
        }
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    }
});
</script>

<script>
// Mobile navigation drawer fix - close drawer when page is clicked
document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on mobile
    const isMobile = window.innerWidth <= 768;
    
    if (isMobile) {
        // Get all navigation links that might open the drawer
        const navLinks = document.querySelectorAll('a[onclick^="showPage"]');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Close mobile menu/drawer if it exists
                closeMobileDrawer();
            });
        });
        
        // Also handle service list items
        const serviceListItems = document.querySelectorAll('.service-list li');
        serviceListItems.forEach(item => {
            item.addEventListener('click', function(e) {
                closeMobileDrawer();
            });
        });
        
        // Handle service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('click', function(e) {
                closeMobileDrawer();
            });
        });
        
        // Handle project cards
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach(card => {
            card.addEventListener('click', function(e) {
                closeMobileDrawer();
            });
        });
    }
    
    function closeMobileDrawer() {
        // Try to find and close WordPress mobile menu
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle, .menu-toggle, .hamburger-menu');
        const mobileMenu = document.querySelector('.mobile-menu, .menu-mobile, .navigation-mobile');
        
        if (mobileMenuToggle && mobileMenuToggle.classList.contains('active')) {
            mobileMenuToggle.click();
        }
        
        if (mobileMenu && mobileMenu.classList.contains('open')) {
            mobileMenu.classList.remove('open');
        }
        
        // Remove any body classes that might indicate open menu
        document.body.classList.remove('mobile-menu-open', 'menu-open', 'nav-open');
    }
    
    // Add hover effects for service cards (desktop only)
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        if (window.innerWidth > 768) { // Only on desktop
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
                const img = this.querySelector('.service-image-top img');
                if (img) {
                    img.style.transform = 'scale(1.05)';
                }
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
                const img = this.querySelector('.service-image-top img');
                if (img) {
                    img.style.transform = 'scale(1)';
                }
            });
        }
        
        // For mobile, add touch feedback
        card.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
            this.style.transition = 'transform 0.1s';
        });
        
        card.addEventListener('touchend', function() {
            this.style.transform = 'scale(1)';
            this.style.transition = 'transform 0.3s';
        });
    });
    
    // Add hover effects for project cards (desktop only)
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        if (window.innerWidth > 768) {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                const img = this.querySelector('.project-image img');
                if (img) {
                    img.style.transform = 'scale(1.05)';
                }
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                const img = this.querySelector('.project-image img');
                if (img) {
                    img.style.transform = 'scale(1)';
                }
            });
        }
        
        // Mobile touch feedback
        card.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
            this.style.transition = 'transform 0.1s';
        });
        
        card.addEventListener('touchend', function() {
            this.style.transform = 'scale(1)';
            this.style.transition = 'transform 0.3s';
        });
    });
    
    // Form submission
    const quoteForm = document.getElementById('quoteForm');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const service = formData.get('service');
            const message = formData.get('message');
            
            // Create WhatsApp message
            const whatsappMessage = `Quote Request:%0A%0AName: ${name}%0AEmail: ${email}%0APhone: ${phone}%0AService: ${service}%0AMessage: ${message || 'No message provided'}`;
            
            // Open WhatsApp with pre-filled message
            window.open(`https://wa.me/971522479361?text=${whatsappMessage}`, '_blank');
            
            // Close mobile menu if open
            if (window.innerWidth <= 768) {
                closeMobileDrawer();
            }
        });
    }
    
    // Simple page show function
    window.showPage = function(pageId) {
        // Hide all pages
        const pages = document.querySelectorAll('.page');
        pages.forEach(page => {
            page.classList.remove('active');
            page.style.display = 'none';
        });
        
        // Show the selected page
        const targetPage = document.getElementById(pageId);
        if (targetPage) {
            targetPage.style.display = 'block';
            targetPage.classList.add('active');
            
            // Scroll to top
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        
        // Close mobile menu/drawer on mobile
        if (window.innerWidth <= 768) {
            closeMobileDrawer();
        }
    };
    
    // Handle window resize for responsive behavior
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Reapply any necessary responsive adjustments
            const pages = document.querySelectorAll('.page');
            const activePage = document.querySelector('.page.active');
            if (activePage) {
                pages.forEach(page => {
                    if (page !== activePage) {
                        page.style.display = 'none';
                    }
                });
                activePage.style.display = 'block';
            }
        }, 250);
    });
});

// Gallery filter function - commented out with gallery section
/*
function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Update active button
    filterButtons.forEach(btn => {
        btn.classList.remove('active');
        btn.style.background = 'var(--light-gray)';
        btn.style.color = 'var(--dark)';
        
        if (btn.textContent.toLowerCase().includes(category) || (category === 'all' && btn.textContent === 'All')) {
            btn.classList.add('active');
            btn.style.background = 'var(--primary)';
            btn.style.color = 'white';
        }
    });
    
    // Filter items
    items.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
*/
</script>

<?php get_footer(); ?>